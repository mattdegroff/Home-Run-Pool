<!--picks-->

<html>
	<head>
		<title>HOME RUN DERBY 2K16 THE SHOW</title>
		<script type="text/javascript" src="../js/clock.js"></script>
	</head>
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
	<?php	
		include_once("../connect.php");
	?>
	<style>
		body {
			<?php 
			if (new DateTime() > $deadline) {
				$sql = "select color from standings order by homeRuns desc, name limit 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "background-color: ".$row['color'];
					}
				}
			}
			else {
				echo "background-color: white";
			}
			?>
		}
		a {
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
		#nav {
			width: 1370px;
			float: left;
			margin: auto;
			padding: 0;
			background-color: #f2f2f2;
			border-bottom: 1px solid #ccc;  }
		#nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}
		#nav li {
			float: left;
		}
		#nav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		/* Change the link color to #111 (black) on hover */
		#nav li a:hover {
			background-color: #111;
		}
		#nav.active {
			background-color: #4CAF50;
		}		
		td {
			vertical-align: top;
		}
		#wrap { 
			width: 1370px; 
			margin: auto; 
		}
	</style>
		
	<div id="wrap">
		<div id="nav">
	<ul>
		<li><a href="/2015">2015</a></li>		
		<li><a href="/2016">2016</a></li>
		<li><a href="/2017">2017</a></li>
		<li><a href="/">2018</a></li>
		<li><a href="http://espn.go.com" target="_blank"><img src="../img/espn.png" alt="espnLogo" style="width:100px;height:19px;"></a></li>		
		<li><a href="http://mlb.mlb.com" target="_blank"><img src="../img/mlb.png" alt="mlbLogo" style="width:100px;height:19px;"></a></li>
		<li style="float:right"><a id="click">
		<?php 
				date_default_timezone_set('America/New_York');
				$date = date("F j, Y");
				echo $date;
			?>
		</a></li>
		<li style= "float:right"><a id="click"><div><span id="clock">&nbsp;</span></div></a></li>
	</ul>
	<!--<marquee bgcolor=#aaFF00 width=1575px>TITS</marquee>-->
	</div>
			<h1 style="font-size: 45; margin-bottom: 0; padding-bottom: 0; text-align: center;">2016</h1>
							<table border=6px style="width: 1360px; text-align: center" bgcolor=black>
								<thead>
									<tr>
										<td colspan="4" style="color:white" align=center>Groups<br>
										</td>
									</tr>
									<tr>
										<th bgcolor=#ffd700>A</th><th bgcolor=silver>B</th><th bgcolor=#cd7f32>C</th><th bgcolor=#a4c639>D</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td bgcolor=#ffd700>
											<table bgcolor=#ffd700>
												<thead>
													<tr>
														<th width="225" align=left>Player</th><th>Pick%</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "select player, team, picks, link from groupA order by id";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()){
																echo "<tr><td><a href='".$row['link']."' style='color:black'>".$row['player']." (".$row['team'].")</a></td><td>".$row['picks']."</td></tr>";
															}
														}
													?>
												</tbody>
											</table>
										</td>
										<td bgcolor=silver>
											<table bgcolor=silver>
												<thead>
													<tr>
														<th width="225" align=left>Player</th><th>Pick%</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "select player, team, picks, link from groupB";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()){
																echo "<tr><td><a href='".$row['link']."' style='color:black'>".$row['player']." (".$row['team'].")</a></td><td>".$row['picks']."</td></tr>";
															}
														}
													?>
												</tbody>
											</table>
										</td>
										<td bgcolor=#cd7f32>
											<table bgcolor=#cd7f32>
												<thead>
													<tr>
														<th width="225" align=left>Player</th><th>Pick%</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "select player, team, picks, link from groupC";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()){
																echo "<tr><td><a href='".$row['link']."' style='color:black'>".$row['player']." (".$row['team'].")</a></td><td>".$row['picks']."</td></tr>";
															}
														}
													?>
												</tbody>
											</table>
										</td>
										<td bgcolor=#a4c639>
											<table bgcolor=#a4c639>
												<tr><td colspan="2" align=center>ALL PLAYERS NOT IN GROUPS A-C</td></tr>
												<tr>
													<td>
														<table>
															<thead>
																<tr>
																	<th width="250" align=left>Player</th><th>Pick%</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	$sql = "select firstName, lastName, team, picks, link from groupD order by lastName limit 15";
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) {
																		while($row = $result->fetch_assoc()){
																			echo "<tr><td><a href='".$row['link']."' style='color:black'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['picks']."</td></tr>";
																		}
																	}
																?>
															</tbody>
														</table>
													</td>
													<td>
														<table>
															<thead>
																<tr>
																	<th width="250" align=left>Player</th><th>Pick%</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	$sql = "select firstName, lastName, team, picks, link from groupD order by lastName limit 15 offset 15";
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) {
																		while($row = $result->fetch_assoc()){
																			if ($row['lastName'] == 'DeGroff') {
																				echo "<tr><td><a href='".$row['link']."' style='color:red'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td style='color:red'>".$row['picks']."</td></tr>";
																			} else {
																				echo "<tr><td><a href='".$row['link']."' style='color:black'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['picks']."</td></tr>";
																			}
																		}
																	}
																?>
															</tbody>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
	</body>
</html>