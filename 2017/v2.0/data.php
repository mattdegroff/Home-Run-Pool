	<?php	
		include_once("connect.php");
		include "update.php";
		include "update1.php";
			
		$deadline = new DateTime("2017-04-02 13:10:00");
		$groupDead = new DateTime("2017-02-24 12:00:00");
	?>						
	<style>
		.color {
			<?php
			$sql = "select font from standings order by homeRuns desc, name limit 1";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if ($row['font'] == 1) {
						echo "color: white;";
					}
					else if ($row['font'] == 2) {
						echo "color: yellow;";
					}
					else {
						echo "color: black;";
					}
				}
			}
			?>
			margin: auto;
		}
		body {			
			text-align: center;
		}
		.vcenter {
			display: inline-block;
			vertical-align: middle;
			float: none;
		}
		.panel-body p {
			font-size: .9vw;
		}
	</style>
	<div class="container">
		<div class="jumbotron">
			<h3><u>Groups</u></h3>
			<div class="row">
				<div class="col-sm-3">
					<div class="panel">  <!-- accordion A -->
					<div class="panel-heading" style="background: #d10000">
						<h4 class="panel-title"> <!-- title A -->
							<a data-toggle="collapse" data-parent="#accordion" href="#accordionA">
								A
							</a>
						</h4>
					</div>
						<!-- panel body -->
					<div id="accordionA" class="panel-collapse collapse">
						<div class="panel-body">
							<?php
													$sql = "select player, team, homeRuns, link from groupA order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<p><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a> - ".$row['homeRuns'] . "</p>";
														}
													}
													?>
						</div>
					</div>
				</div>
				</div>
				<div class="col-sm-3">
				<div class="panel">  <!-- accordion B -->
					<div class="panel-heading" style="background: #ff7171">
						<h4 class="panel-title"> <!-- title B -->
							<a data-toggle="collapse" data-parent="#accordion" href="#accordionB">
								B
							</a>
						</h4>
					</div>
						<!-- panel body -->
					<div id="accordionB" class="panel-collapse collapse">
						<div class="panel-body">
							<?php
													$sql = "select player, team, homeRuns, link from groupB order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<p><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a> - ".$row['homeRuns'] . "</p>";
														}
													}
													?>
						</div>
					</div>
				</div>
				</div>
				<div class="col-sm-3">
					<div class="panel">  <!-- accordion C -->
					<div class="panel-heading"  style="background: #ffafaf">
						<h4 class="panel-title"> <!-- title C -->
							<a data-toggle="collapse" data-parent="#accordion" href="#accordionC">
								C
							</a>
						</h4>
					</div>
						<!-- panel body -->
					<div id="accordionC" class="panel-collapse collapse">
						<div class="panel-body">
							<?php
													$sql = "select player, team, homeRuns, link from groupC order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<p><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a> - ".$row['homeRuns'] . "</p>";
														}
													}
													?>
						</div>
					</div>
				</div>
				</div>
				<div class="col-sm-3">
				<div class="panel">  <!-- accordion D -->
					<div class="panel-heading">
						<h4 class="panel-title"> <!-- title D -->
							<a data-toggle="collapse" data-parent="#accordion" href="#accordionD">
								D
							</a>
						</h4>
					</div>
						<!-- panel body -->
					<div id="accordionD" class="panel-collapse collapse">
						<div class="panel-body">
							<?php
													$sql = "select firstName, lastName, team, homeRuns, link from groupD order by lastName";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<p><a href='".$row['link']."' style='color:black' target='_blank'>".$row['firstName']. " " . $row['lastName'] ." (".$row['team'].")</a> - ".$row['homeRuns'] . "</p>";
														}
													}
													?>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-9">
				<?php
					standings1($deadline);
				?>
			</div>
			<div class="col-sm-3">
								
				<div class="row">
					<!--<div class="panel panel-default">
  						<div class="panel-heading">B</div>
  						<div class="panel-body">
<?php
													/*$sql = "select player, team, homeRuns, link from groupB order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<p><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a> - ".$row['homeRuns'] . "</p>";
														}
													}*/
													?>
						</div>
					</div>
				</div>-->
				
				
				</div>
				
			<div class="row">
				<div class="panel">
					<div class="panel-heading"><div class="panel-title"><h1>Home Runs Today</h1></div></div>
						<?php
							if (new DateTime() > $deadline) {
								$sql = "select player, HR from today";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()){
										echo "<p>".$row['player']." - ".$row['HR']."</p>";
									}
								}
								echo "</table>";
							} else {
								//echo '<input name="password" type="password" placeholder="Password" onkeyup="showUser(this.value)"/>';
								//echo '<div id="txtHint"></div>';
							}
						?>
				</div>
					<div class="panel">
					<div class ="panel-header"><div class="panel-title"><u>Goat Squad</u></div></div>
					<div class="panel-body">
					<?php
						printRabbit1($groupDead);
						printRabbit2($groupDead);									
					?>
					<h3><?php echo "Total: " . sum('rabbit'); ?> </h3>
				</div>
		</div>
	</div>
	</div>
	</div>
	
	
	
	
