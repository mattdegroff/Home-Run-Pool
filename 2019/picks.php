<?php
	if(!isset($_SESSION['year']) && !isset($_SESSION['page'])) {
		$_SESSION['year'] = 2019;
		$_SESSION['page'] = "picks";
	}
?>

<html>
	<head>
		<title>Dinger Derby <?php echo date("Y"); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/clock.js"></script>
		
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
			font-size: 2vw;
		}
		.cardGOAT {
			font-size: 2vw;
		}
		.cardPart {
			font-size: 2.25vw;
		}
		.cardGroups {
			font-size: 2.25vw;
		}
}
@media (min-width: 768px) {
		.cardStandings {
			font-size: 1.5vw;
		}
		.cardGOAT {
			font-size: 1.75vw;
		}
		.cardPart {
			font-size: 1.75vw;
		}
		.cardGroups {
			font-size: 1.4vw;
		}
}
@media (min-width: 992px) {
		.cardStandings {
			font-size: 1vw;
		}
		.cardGOAT {
			font-size: 1vw;
		}
		.cardPart {
			font-size: 1vw;
		}
		.cardGroups {
			font-size: 1vw;
		}
}

		<?php
		if (new DateTime() > $deadline) {
				echo ".navbar { margin-bottom: 20px; }";
			}
		?>
		</style>

	<nav class="navbar navbar-expand-sm navbar-light bg-light">
  		<!-- Brand -->
  		<a class="navbar-brand" href="/<?php echo date("Y"); ?>/">Dinger Derby '19</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ">
					<?php
						if (new DateTime() > $deadline) {
							echo '<li class="nav-item">
							<a class="nav-link" href="picks.php">
								Pick %
							</a>
						</li>';
						}
					?>
					<li class="nav-item">
			      <a class="nav-link" href="/2019/">
			        2019
			      </a>
			  	</li>
					<li class="nav-item">
			      <a class="nav-link" href="/2019/">
			        2018
			      </a>
			  	</li>
					<li class="nav-item">
			      <a class="nav-link" href="/2017/">
			        2017
			      </a>
			  	</li>
					<li class="nav-item">
			      <a class="nav-link" href="/2016/">
			        2016
			      </a>
			  	</li>
					<li class="nav-item">
			      <a class="nav-link" href="/2015/">
			        2015
			      </a>
			  	</li>
		      	<li>
		       		<a class="nav-link" href="http://espn.com/mlb" target="_blank"><img src="img/espn.png" alt="espnLogo" style="width:100px;height:25px;"></a>
		      	</li>
						</ul>
						<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="#" class="nav-link"><span id="clock">&nbsp;</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link"><?php
			date_default_timezone_set("America/New_York");
			$date = date("F j, Y");
			echo $date;
		?></a></li>
			</ul>
		</div>
	</nav>
		<div id="main" class="container">
			<?php 
			if ($_SESSION['page'] == "totals") {
				include('totals.php');
			} else if ($_SESSION['page'] == "picks") {
				include('picksData.php');
			} else {
				echo '<h1 class="text-center">Please Refresh the Page</h1>';
			}
			?>
		</div>
		<section class="footer text-center" style="padding: 25px; margin-top: 10px; background-color: #f8f9fa;">Matt DeGroff &copy; <?php echo date("Y"); ?></section>
	</body>
</html>
<?php
	session_destroy();
	?>
