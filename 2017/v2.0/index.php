<?php	
	include_once("connect.php");
	include("../update.php");
	$deadline = new DateTime("2017-04-03 13:05:00");
?>		

<html>
	<head>
		<title>Home Run Derby 2k17</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/vue"></script>
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
			
			function update() {
				 	xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("content").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","data.php",true);
					xmlhttp.send();
			}
			
			var dead = new Date("2017-04-02T13:10:00");
			var now = new Date();

			if (now < dead) {
				setInterval(update, 750);
			}
			else {
				update();
			}
		</script>
	</head>
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
		<style>
			body {
				<?php 
					if (new DateTime() > $deadline) {
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
								}*/
							}
						}
					}
					else {
						echo "background-color: white;";
					}
				?>
			}
			table {
			align: center;
		}
		td, th {
			white-space: nowrap;
			overflow: hidden;
			vertical-align: top;
		}
		#dark {
			color: white;
		}
		#yellow {
			color:yellow;
		}
		#total {
			outline: thin solid black; 
		}
		#picks {
			border-style: 6px;
			border-color: #ff0000;
		}
		table {
			border-radius: 5px;
		}
		</style>
	
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="#">Home Run Derby 2k17</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="http://hrderby2k17.com">Home</a></li>
					<li><a href="http://hrderby2k17.com/2016/">2016</a></li>
					<li><a href="http://espn.com/mlb" target="_blank"><img src="img/espn.png" alt="espnLogo" style="width:100px;height:19px;"></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-time"></span> <span id="clock">&nbsp;</span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-calendar"></span> 
					<?php 
					date_default_timezone_set('America/New York');
					$date = date("F j, Y");
					$sql = "select date from date";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){ 
							$time = strtotime($row['date']);
						}
					}
					$updateTime = date("n/d/y g:i A", $time);
					echo $date;
				?>
					</a></li>
				</ul>
			</div>
		</nav>
		
		<?php
			if (new DateTime() < $deadline) {
				echo '<h2><u>TEAMS LOCK APRIL 2, 2017 AT 1:10 PM</u></h2>';
			}
		?>
		
		<div class="col-md-12">
			<div id="content"> Loading... </div>
		</div>
	</body>
</html>