	<?php
	if (substr($_GET["id"],0,4) == "2015"){
		include_once("connect2015.php");
		$colorA = 'red';
		$colorB = '#1e90ff';
		$colorC = 'yellow';
		$colorD = '#20ff00';
		$deadline = new DateTime('2015-04-05T13:10:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2015-03-03T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2015-10-04T23:59:59', new DateTimeZone('America/New_York'));
	} else if (substr($_GET["id"],0,4) == "2016"){
		include_once("connect2016.php");
		$colorA = '#ffd700';
		$colorB = 'silver';
		$colorC = '#cd7f32';
		$colorD = '#a4c639';
		$deadline = new DateTime('2016-04-03T13:10:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2016-02-27T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2018-10-02T23:59:59', new DateTimeZone('America/New_York'));
	} else if (substr($_GET["id"],0,4) == "2017"){
		include_once("connect2017.php");
		$colorA = '#d10000';
		$colorB = '#ff7171';
		$colorC = '#ffafaf';
		$colorD = '#white';
		$deadline = new DateTime('2017-04-02T13:10:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2017-03-01T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2017-10-01T23:59:59', new DateTimeZone('America/New_York'));
	} else {
		include_once("connect2018.php");
		$colorA = '#00cc66';
		$colorB = '#d9d9d9';
		$colorC = '#00cc66';
		$colorD = '#d9d9d9';
		$deadline = new DateTime('2018-03-29T12:40:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2018-02-12T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2018-09-30T23:59:59', new DateTimeZone('America/New_York'));
	}

		include "update1.php";
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
	</style>
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
				$sql = "SELECT player, homeRuns FROM groupA ORDER BY homeRuns DESC LIMIT 1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
								}
							}
					$sql = "select player, team, picks, link from groupA order by id";
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

				$sql = "select sum(picks) from groupA";
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
				$sql = "SELECT player, homeRuns FROM groupB ORDER BY homeRuns DESC LIMIT 1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
								}
							}
					$sql = "select player, team, picks, link from groupB order by id";
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

				$sql = "select sum(picks) from groupB";
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
				$sql = "SELECT player, homeRuns FROM groupC ORDER BY homeRuns DESC LIMIT 1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
								}
							}
					$sql = "select player, team, picks, link from groupC order by id";
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

				$sql = "select sum(picks) from groupC";
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
				$sql = "SELECT firstName, lastName FROM groupD ORDER BY homeRuns DESC LIMIT 1";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								$player = $row['firstName']." ".$row['lastName'];
							}
						}

					$sql = "select firstName, lastName, team, picks, link from groupD order by lastName";
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

				$sql = "select sum(picks) from groupD";
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
