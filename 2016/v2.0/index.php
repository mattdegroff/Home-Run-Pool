<?php	
	$host_name  = "db617636683.db.1and1.com";
	$database   = "db617636683";
	$user_name  = "dbo617636683";
	$password   = "UVMI3Kr4";

	$conn = mysql_connect($host_name, $user_name, $password);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	include "../update.php";

	mysql_select_db($database);
	
	$deadline = new DateTime("2016-04-03 13:05:00");
?>		

<html>
	<head>
	</head>
	<body>
		<style>
			body {
				margin: 0px;
			}
			hr {
				padding: 0px;
				margin: 0px;    
			}
			div {
				text-align: center;
			}
			div div {
				margin: 1%;
				border-radius: 2%;
			}
			marquee {
				position: relative;
				transform: translateY(-50%);
				top: 50%;
				width: 99%;
				font-size: 24px;
			}
			iframe {
				position: relative;
				transform: translateY(-50%);
				top: 50%;
				width: 98%;
				height: 90%;
				margin: auto;
			}
			table {
				border-radius: 2%;
			}
			tr {
				text-align: center;
			}
			#dark {
				color: white;
			}
			#yellow {
				color: yellow;
			}
			
			.left {
				position: relative;
				width: 15%;
				height: 100%;
				float: left;
				box-shadow: 4px 0px 10px #888888;
			}
				.topLeft {
					background-color: black;
					height: 71%;
					position: top;
					color: white;
				}
				.bottomLeft {
					background-color: blue;
					height: 27%;
					position: bottom;
				}
				
			.main {
				position: relative;
				width: 60%;
				height: 100%;
				float: right;
				vertical-align: middle;
			}
			
			.right {
				position: relative;
				width: 25%;
				height: 100%;
				float: right;
				box-shadow: -4px 0px 10px #888888;
			}
				.groupA {
					background-color:#ffd700;
					height: 12%;
					position: bottom;
				}
				.groupB {
					background-color:silver;
					height: 16%;
					position: bottom;
				}
				.groupC {
					background-color:#cd7f32;
					height: 20%;
					position: bottom;
				}
				.groupD {
					background-color:#a4c639;
					height: 47%;
					position: bottom;
				}
				
			.topBar {
				background-color: orange;
				height: 5%;
				width: 60%;
				position: fixed;
				top: 0px;
				left: 15%;	
				vertical-align: middle;
				text-align: center;
			}
			.bottomBar {
				background-color: orange;
				height: 5%;
				width: 60%;
				position: fixed;
				bottom: 0px;
				left: 15%;				
				
			}
		</style>
		
		<div class="left">
			<div class="topLeft">
				<table bgcolor=black align=center style="font-size: .85vw;" width="100%">
					<thead>
						<tr>
							<td id="dark" colspan="4">Standings</td>
						</tr>
						<tr id="dark"> 
							<th>#</th><th>Name</th><th>HR</th><th >HRB</th>
						</tr>
					</thead>
					<tbody>
						<?php standings($deadline); ?>
					</tbody>
				</table>
				<a href="about:blank" target="iFrame" style="color:white">Show Picks</a>
			</div>
			<hr>
			<div class="bottomLeft">
				<table bgcolor=black align=center style="font-size: .85vw;" width="100%">
					<thead>
						<tr>
							<td colspan="3" id="dark">GOAT Squad</td>
						</tr>
						<tr id="dark">
							<th>Group</th><th>Player</th><th>HR</th>
						</tr>
					</thead>
					<tbody>
						<?php
							printRabbit($deadline);			
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="right">
			<div class="groupA">
				<table align="center">
					<tr>
						<td>
							<table style="font-size: .85vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select player, team, link, homeRuns from groupA limit 3";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
										}
									?>
							</table>
						</td>
						<td>
							<table style="font-size: .85vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select player, team, link, homeRuns from groupA limit 3 offset 3";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
										}
									?>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<hr>
			<div class="groupB">
				<table align="center">
					<tr>
						<td>
							<table style="font-size: .85vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select player, team, link, homeRuns from groupB limit 5";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
										}
									?>
							</table>
						</td>
						<td>
							<table style="font-size: .85vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select player, team, link, homeRuns from groupB limit 5 offset 5";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
										}
									?>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<hr>
			<div class="groupC">
				<table align="center">
					<tr>
						<td>
							<table style="font-size: .95vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select player, team, link, homeRuns from groupC limit 6";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
										}
									?>
							</table>
						</td>
						<td>
							<table style="font-size: .95vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select player, team, link, homeRuns from groupC limit 6 offset 6";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
										}
									?>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<hr>
			<div class="groupD">
				<table align="center" style="position: relative; transform: translateY(-50%); top: 50%;">
					<tr>
						<td>
							<table style="font-size: .95vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select firstName, lastName, team, link, homeRuns from groupD limit 15";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
										}
									?>
							</table>
						</td>
						<td>
							<table style="font-size: .95vw;">
								<tr>
									<th>Player</th><th>HR</th>
								</tr>	
									<?php
										$sql = "select firstName, lastName, team, link, homeRuns from groupD limit 15 offset 15";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
					
										while($row = mysql_fetch_assoc($result)){
											if ($row['lastName'] == 'Schwarber') {
												echo "<tr><td style='color: #DD0000'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</td><td style='color: #DD0000'>".$row['homeRuns']."</td></tr>";
											}
											else {
												echo "<tr><td><a href='".$row['link']."' style='color:black' target='iFrame'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
											}
										}
									?>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>		
		<div class="main">
			<iframe allowTransparency="true" frameborder=0 name="iFrame" sandbox="" style="float: middle"></iframe>
		</div>
		<div class="topBar">
			<marquee>
				<?php
					$sql = "SELECT COUNT(*) AS RowCnt FROM today";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
									
					while($row = mysql_fetch_assoc($result)){
						$count = $row['RowCnt'];
					}
					
					if ($count == 0) {
						echo "No Home Runs Hit Today";
					}
					else {
						$sql = "select player, HR from today";
						$result = mysql_query($sql);
						if (!$result) {
							die('Invalid query: ' . mysql_error());
						}
				
						$HRhit = "";
						while($row = mysql_fetch_assoc($result)){
							$HRhit .= $row['player']." (".$row['HR'].") - ";
						}
						$HRhit = substr($HRhit, 0, strlen($HRhit)-3);
					
						echo $HRhit;
					}
				?>
			</marquee>
		</div>
		<div class="bottomBar">
		</div>
	</body>
</html>