<?php
		session_start();
		include("details.php");
		include_once("update1.php");
	?>
	<h1 class="text-center"><?php echo substr($_GET["id"],0,4); ?></h1>
	<div class="card-group">
		<div class="card" style=<?php echo '"background-color: ' . $colorA . '"'; ?>>
			<img class="card-img-top img-fluid" src="<?php echo Apic(); ?>" alt="Card image">
			<div class="card-body">
				<div class="card-title text-center"><b>A</b></div>
				<div class="row">
					<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">Player</div>
					<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">%</div>
				</div>
				<?php
				$sql = "SELECT player, homeRuns FROM groupa ORDER BY homeRuns DESC LIMIT 1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
								}
							}
					$sql = "select player, team, picks, link from groupa order by id";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						if ($row['player'] == $player && new DateTime() > $deadline) {
							echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
									<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
									.' ('.$row['team'].')</a>
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</b></div></div>';
							} else {
						echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
									<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
									.' ('.$row['team'].')</a>
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</div></div>';
							}
					}
				}

				$sql = "select sum(picks) from groupa";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					echo '<div class="row"><div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"></div><div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>'.$row['sum(picks)']."</b></div></div>";
				}
			}

						?>
			</div>
		</div>
		<div class="card" style=<?php echo '"background-color: ' . $colorB . '"'; ?>>
			<img class="card-img-top img-fluid" src="<?php echo Bpic(); ?>" alt="Card image">
			<div class="card-body">
				<div class="card-title text-center"><b>B</b></div>
				<div class="row">
					<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">Player</div>
					<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">%</div>
				</div>
				<?php
				$sql = "SELECT player, homeRuns FROM groupb ORDER BY homeRuns DESC LIMIT 1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
								}
							}
					$sql = "select player, team, picks, link from groupb order by id";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						if ($row['player'] == $player && new DateTime() > $deadline) {
							echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
									<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
									.' ('.$row['team'].')</a>
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</b></div></div>';
							} else {
						echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
									<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
									.' ('.$row['team'].')</a>
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</div></div>';
							}
					}
				}

				$sql = "select sum(picks) from groupb";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					echo '<div class="row"><div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"></div><div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>'.$row['sum(picks)']."</b></div></div>";
				}
			}
						?>
			</div>
		</div>
		<div class="card" style=<?php echo '"background-color: ' . $colorC . '"'; ?>>
			<img class="card-img-top img-fluid" src="<?php echo Cpic(); ?>" alt="Card image">
			<div class="card-body">
				<div class="card-title text-center"><b>C</b></div>
				<div class="row">
					<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">Player</div>
					<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">%</div>
				</div>
				<?php
				$sql = "SELECT player, homeRuns FROM groupc ORDER BY homeRuns DESC LIMIT 1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
								}
							}
					$sql = "select player, team, picks, link from groupc order by id";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						if ($row['player'] == $player && new DateTime() > $deadline) {
							echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
									<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
									.' ('.$row['team'].')</a>
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</b></div></div>';
							} else {
						echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
									<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
									.' ('.$row['team'].')</a>
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</div></div>';
							}
					}
				}

				$sql = "select sum(picks) from groupc";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					echo '<div class="row"><div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"></div><div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>'.$row['sum(picks)']."</b></div></div>";
				}
			}
						?>
			</div>
		</div>
		<div class="card" style=<?php echo '"background-color: ' . $colorD . '"'; ?>>
			<img class="card-img-top img-fluid" src="<?php echo Dpic(); ?>" alt="Card image">
			<div class="card-body">
				<div class="card-title text-center"><b>D</b></div>
				<div class="row">
					<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">Player</div>
					<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">%</div>
				</div>
				<?php
				$player = '';
				$sql = "SELECT firstName, lastName FROM groupd ORDER BY homeRuns DESC LIMIT 1";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								$player = $row['firstName']." ".$row['lastName'];
							}
						}

					$sql = "select firstName, lastName, team, picks, link from groupd order by lastName";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$play = $row['firstName']." ".$row['lastName'];
						if ($play == $player) {
						echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
									<a href="'.$row['link'].'" style="color:black" target="_blank"><b>'.$row['firstName'].' ' . $row['lastName'] . ' (' .$row['team'].')</a></div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</b></div></div>';
							} else {
								echo '<div class="row">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
									<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['firstName'].' ' . $row['lastName'] . ' (' .$row['team'].')</a></div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['picks'].'</div></div>';
							}

					}
				}

				$sql = "select sum(picks) from groupd";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					echo '<div class="row"><div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"></div><div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>'.$row['sum(picks)']."</b></div></div>";
				}
			}
						?>
			</div>
		</div>
	</div>
