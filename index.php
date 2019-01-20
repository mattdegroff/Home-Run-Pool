<?php
	include('year.php');
	//include('../'.$year.'/update1.php');
?>

<html>
	<head>
		<title>Home Run Derby <?php echo $year; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../<?php echo $year; ?>/css/bootstrap.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../<?php echo $year; ?>/js/clock.js"></script>
		<script>
			var xmlhttp;

			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var id1 = "2018totals";

			function update(id) {
				id1=id;
				if (id.substring(4, id.length) ==="totals"){
				 	xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById(id).innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","data.php?id="+id,true);
					xmlhttp.send();
				} else {
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById(id).innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","dataPicks.php?id="+id,true);
					xmlhttp.send();
				}
			}

			//var dead = new Date("2018-03-29T12:40:00");
			//var now = new Date();

			//if (now > dead) {
				//setInterval(update("2018totals"), 750);
			//}
			//else {
				//update("2018totals");
			//}
		</script>
	</head>
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
		<style>
		body {
			<?php
				/*if (new DateTime() > $deadline) {
					$sql = "select color, font from standings order by homeRuns desc, name limit 1";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo "background-color: ".$row['color']. ";";
							/*if ($row['font'] == 1) {
								echo "color: white;";
							}
							 else if ($row['font'] == 2) {
								echo "color: yellow;";
							}
						}
					}
				}
				else {
					echo "background-color: white;";
				}*/
			?>
		}
		#dark {
			color: white;
		}
		#yellow {
			color: yellow;
		}
		#red {
			color: red;
		}
		html {
			font-size: 14px;
		}
		 #drop {
			 color: rgba(0,0,0,.3);
		 }

		.card {
			margin-top: 10px;
		}
@media (min-width: 576px) {
		.cardStandings {
			font-size: 1.5vh;
		}
		.cardGOAT {
			font-size: 1.75vh;
		}
		.cardPart {
			font-size: 1.75vh;
		}
		.cardGroups {
			font-size: 2vh;
		}
}
@media (max-width: 576px) {
		.cardStandings {
			font-size: 2vh;
		}
		.cardGOAT {
			font-size: 2vh;
		}
		.cardPart {
			font-size: 2.25vh;
		}
		.cardGroups {
			font-size: 2.25vh;
		}
}

		<?php
		if (new DateTime() > $deadline) {
				echo ".navbar { margin-bottom: 20px; }";
			}
		?>
		</style>

	<nav class="navbar navbar-expand-md navbar-light">
  		<!-- Brand -->
  		<a class="navbar-brand" href="#">Dinger Derby '19</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
			        2018
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item active show" data-toggle="pill" href="#2018totals" onclick="update('2018totals')">Totals</a>
			        <a class="dropdown-item" data-toggle="pill" href="#2018picks" onclick="update('2018picks')">Pick %</a>
			      </div>
			  	</li>
			  	<li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        2017
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item"  data-toggle="pill" href="#2017totals" onclick="update('2017totals')">Totals</a>
			        <a class="dropdown-item"  data-toggle="pill" href="#2017picks" onclick="update('2017picks')">Pick %</a>
			      </div>
			    </li>
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        2016
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" data-toggle="pill" href="#2016totals" onclick="update('2016totals')">Totals</a>
			        <a class="dropdown-item" data-toggle="pill" href="#2016picks" onclick="update('2016picks')">Pick %</a>
			      </div>
			    </li>
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        2015
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" data-toggle="pill" href="#2015totals" onclick="update('2015totals')">Totals</a>
			        <a class="dropdown-item" data-toggle="pill" href="#2015picks" onclick="update('2015picks')">Pick %</a>
			      </div>
			    </li>
		      	<li>
		       		<a class="nav-link" href="http://espn.com/mlb" target="_blank"><img src="../<?php echo $year ?>/img/espn.png" alt="espnLogo" style="width:100px;height:25px;"></a>
		      	</li>
		      </ul>
		      <ul class="navbar-nav">
						<li class="nav-link">
							<div><span id="clock">&nbsp;</span></div>
						</li>
						<li class="nav-link">
						<?php
							date_default_timezone_set("America/New_York");
							$date = date("F j, Y");
							echo $date
						?>
					</li>
			  </ul>
		</div>
	</nav>

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
		$deadline = new DateTime('2018-02-28T12:40:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2018-02-12T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2018-09-30T23:59:59', new DateTimeZone('America/New_York'));
	}

		include "update1.php";

	?>
	<style>
	<?php if (new DateTime() > $deadline) {
		echo '
		@media (min-width: 576px) {
			.cardscroll {

				overflow-y: scroll;
				overflow: auto;
			}

			.groupScroll {
				height: 21%;
			}

			.hrScroll {
				height: 21%;
			}
			.cardscroll::-webkit-scrollbar
			{
				width: 2px;
				background-color: transparent;
			}

			.cardscroll::-webkit-scrollbar-thumb
			{
				border-radius: 2px;
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
				background-color: #000;
			}}';
		}
		?>

		.card-deck .card {
    margin-left: 15px;
    margin-right: 15px;
}

.card-deck .card:not(:last-child) {
    margin-right: 15px;
}

.card-deck .card:not(:first-child) {
    margin-left: 15px;
}
	</style>

	<?php
		if (new DateTime() < $deadline) {
			echo '<div class="alert alert-success alert-dismissable text-center fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>Teams lock <strong>March 29<sup>th</sup>, 2018 at 12:40 PM</strong></div>';
			if (new DateTime() < $groupDead) {
				echo '<div class="alert alert-success alert-dismissable text-center fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>Groups will be released on <strong>February 12<sup>th</sup>, 2018 at Noon</strong></div>';
			}
		}
	?>

	<h1 class="text-center"><?php echo substr($_GET["id"],0,4); ?></h1>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-xl-4">
					<div class="card cardStandings">
						<div class="card-header text-center">
							<h5>Standings</h5>
						</div>
						<div class="card-body text-center">
							<div class="container-fluid cardStandings">
								<div class="row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">#</div>
									<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">Name</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">HR</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">HRB</div>
								</div>
								<?php standings($deadline); ?>
							</div>
						</div>
					</div>
			</div>
			<div class="col-md-4 col-lg-4 col-xl-4">
				<!--<div class="card-group" style="background-color: #eeeeee;">
					<div class="card-body text-center">-->
						<!--<div class="card-group">-->
							<div class="card" >
							<div class="card-header text-center">
								<h5>Groups</h5>
								<ul class="nav nav-pills card-header-pills nav-fill">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="pill" href=<?php echo "#A".substr($_GET["id"],0,4)?>>A</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href=<?php echo "#B".substr($_GET["id"],0,4)?>>B</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href=<?php echo "#C".substr($_GET["id"],0,4)?>>C</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href=<?php echo "#D".substr($_GET["id"],0,4)?>>D</a>
									</li>
								</ul>
							</div>
							<div class="card-block cardGroups">
								<div class="tab-content">
								<div class="tab-pane active fade show" id=<?php echo "A".substr($_GET["id"],0,4)?> style=<?php echo '"background-color: ' . $colorA . '"'; ?>>
									<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Apic().' alt="Card image">'; }?>
										<div class="card-body">
											<!--<h4 class="card-title text-center">A</h4>-->
											<div class="card-text cardscroll groupScroll">
												<div class="container-fluid">
													<div class="row">
														<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
														<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
													</div>
												<?php
													if (new DateTime() > $groupDead) {
														$sql = "SELECT player FROM groupA ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['player'];
																	}
																}

															$sql = "select player, team, homeRuns, link from groupA order by id";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()){
																if ($row['player'] == $player && new DateTime() > $deadline) {
																	echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
																			<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																			.' ('.$row['team'].')</a>
																			</div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																	} else {
																echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																			<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																			.' ('.$row['team'].')</a>
																			</div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																	}
															}
														}
													}
												?>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id=<?php echo "B".substr($_GET["id"],0,4)?> style=<?php echo '"background-color: ' . $colorB . '"'; ?>>
									<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Bpic().' alt="Card image">'; }?>
										<div class="card-body">
										<!--<h4 class="card-title text-center">B</h4>-->
										<div class="card-text cardscroll groupScroll">
											<div class="container-fluid">
												<div class="row">
													<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
													<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
												</div>
											<?php
												if (new DateTime() > $groupDead) {
													$sql = "SELECT player FROM groupB ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['player'];
																	}
																}

														$sql = "select player, team, homeRuns, link from groupB order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															if ($row['player'] == $player && new DateTime() > $deadline) {
																echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																} else {
															echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																}
														}
													}
												}
											?>
										</div>
									</div>
								</div>
								</div>
								<div class="tab-pane fade" id=<?php echo "C".substr($_GET["id"],0,4)?> style=<?php echo '"background-color: ' . $colorC . '"'; ?>>
								<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Cpic().' alt="Card image">'; }?>
										<div class="card-body">
										<!--<h4 class="card-title text-center">C</h4>-->
										<div class="card-text cardscroll groupScroll">
											<div class="container-fluid">
												<div class="row">
													<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
													<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
												</div>
											<?php
												if (new DateTime() > $groupDead) {
													$sql = "SELECT player, homeRuns FROM groupC ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['player'];
																	}
																}
														$sql = "select player, team, homeRuns, link from groupC order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															if ($row['player'] == $player && new DateTime() > $deadline) {
																echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																} else {
															echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																}
														}
													}
												}
											?>
										</div>
									</div>
								</div>
								</div>
								<div class="tab-pane fade" id=<?php echo "D".substr($_GET["id"],0,4)?> style=<?php echo '"background-color: ' . $colorD . '"'; ?>>
									<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Dpic().' alt="Card image">'; }?>
									<div class="card-body">
										<!--<h4 class="card-title text-center">D</h4>-->
										<div class="card-text cardscroll groupScroll">
											<div class="container-fluid">
												<div class="row">
													<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
													<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
												</div>
											<?php
												if (new DateTime() > $groupDead) {

													if (new DateTime() > $deadline) {
														$player = '';
														$sql = "SELECT firstName, lastName FROM groupD ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['firstName']." ".$row['lastName'];
																	}
																}

															$sql = "select firstName, lastName, team, homeRuns, link from groupD order by lastName";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()){
																$play = $row['firstName']." ".$row['lastName'];
																if ($play == $player) {
																echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																			<a href="'.$row['link'].'" style="color:black" target="_blank"><b>'.$row['firstName'].' ' . $row['lastName'] . ' (' .$row['team'].')</a></div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																	} else {
																		echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																			<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['firstName'].' ' . $row['lastName'] . ' (' .$row['team'].')</a></div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																	}

															}
														}
													} else {
														echo '<div class="row"><div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center"><h1>Players not in <br>Groups A - C</h1></div></div>';
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
				</div>
				<div class="col-md-4 col-lg-4 col-xl-4">
						<div class="card cardGOAT">
							<div class="card-header text-center">
								<h5>G.O.A.T.</h5>
							</div>
							<div class="card-body text-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
										<div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">Player</div>
										<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">HR</div>
									</div>
									<?php printRabbit($deadline); ?>
								</div>
							</div>
						</div>
						<?php
						if (new DateTime() > $deadline && new DateTime() < $final) {
							echo '<div class="card">
							<div class="card-header text-center">
								<h5>Home Runs Today</h5>
							</div>
							<div class="card-body cardScroll hrScroll">
								<div class="container-fluid text-center">';

							$sql = "select player, HR from today";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								echo '<div class="row text-center"><div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center">'.$row['player'].
								'</div><div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">'.$row['HR'].'</div></div>';
							}
						}

						echo '</div>
							</div>
						</div>';
						}
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
			<?php
					printGroups($deadline);
				?>
			</div>
			</div>
		</div>




		<!--<div class="tab-content">
	  	<div class="tab-pane fade show container active text-center" id="2018totals">Loading...</div>
			<div class="tab-pane fade container text-center" id="2018picks">Loading...</div>
	  	<div class="tab-pane fade container text-center" id="2017totals">Loading...</div>
	  	<div class="tab-pane fade container text-center" id="2017picks">Loading...</div>
  		<div class="tab-pane fade container text-center" id="2016totals">Loading...</div>
  		<div class="tab-pane fade container text-center" id="2016picks">Loading...</div>
  		<div class="tab-pane fade container text-center" id="2015totals">Loading...</div>
  		<div class="tab-pane fade container text-center" id="2015picks">Loading...</div>
		</div>-->

		<section class="footer text-center" style="padding: 25px; margin-top: 10px; background-color: #eeeeee;">Created by Matt DeGroff</section>
	</body>
</html>
