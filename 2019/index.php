<?php
	include("update1.php");
	session_start();
?>

<html>
	<head>
		<title>YABO '19</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/clock.js"></script>
		<script>
			var xmlhttp;

			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			function update(id) {
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("main").innerHTML = xmlhttp.responseText;
					}
				};
				if (id.substring(4, id.length) ==="totals"){
					xmlhttp.open("GET","dataGroups.php?id="+id,true);
				} else {
					xmlhttp.open("GET","dataPicks.php?id="+id,true);
				}
				xmlhttp.send();
			}
				update("2015totals");
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
#main {
	margin-top: 75px;
}
		<?php
		if (new DateTime() > $deadline) {
				echo ".navbar { margin-bottom: 20px; }";
			}
		?>
		</style>

	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light justify-content-between">
  		<!-- Brand -->
  		<a class="navbar-brand" href="#">Dinger Derby '19</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ">
					<li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        2019
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#2019totals" onclick="update('2019totals')">Totals</a>
			        <a class="dropdown-item disabled" href="#2019picks" onclick="update('2019picks')">Pick %</a>
			      </div>
			  	</li>
					<li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        2018
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#2018totals" onclick="update('2018totals')">Totals</a>
			        <a class="dropdown-item" href="#2018picks" onclick="update('2018picks')">Pick %</a>
			      </div>
			  	</li>
			  	<li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        2017
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#2017totals" onclick="update('2017totals')">Totals</a>
			        <a class="dropdown-item" href="#2017picks" onclick="update('2017picks')">Pick %</a>
			      </div>
			    </li>
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        2016
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#2016totals" onclick="update('2016totals')">Totals</a>
			        <a class="dropdown-item" href="#2016picks" onclick="update('2016picks')">Pick %</a>
			      </div>
			    </li>
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
			        2015
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item active show" onclick="update('2015totals')">Totals</a>
			        <a class="dropdown-item" onclick="update('2015picks')">Pick %</a>
			      </div>
			    </li>
		      	<li>
		       		<a class="nav-link" href="http://espn.com/mlb" target="_blank"><img src="img/espn.png" alt="espnLogo" style="width:100px;height:25px;"></a>
		      	</li>
		      </ul>
					<span id="clock" class="navbar-text float-right">&nbsp;</span>  <span class="navbar-text float-right"> <?php
			date_default_timezone_set("America/New_York");
			$date = date("F j, Y");
			echo $date;
		?></span>
		</div>
	</nav>
		<div id="main" >
				Loading...
		</div>
		<section class="footer text-center" style="padding: 25px; margin-top: 10px; background-color: #eeeeee;">Matt DeGroff &copy; Copyright <?php echo date("Y"); ?></section>
	</body>
</html>
