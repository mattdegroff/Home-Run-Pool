<html>
	<meta name=viewport content='width=700'>
	
	<head>
		<title>HOME RUN DIRTY 2K16</title>
		<script type="text/javascript" src="../js/clock.js"></script>
		<script>
		var xmlhttp;
		if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
		
		function showUser(str) {
				if (str == "") {
					document.getElementById("txtHint").innerHTML = "";
					return;
				} else { 
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","../passDisplay.php?q="+str,true);
					xmlhttp.send();
				}
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
			
			
			var dead = new Date("2017-04-03 13:05:00");
			var now = new Date();

			if (now > dead) {
				setInterval(update, 500);
			}
			else {
				update();
			}
		</script>
	</head>
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
               <?php	
			$host_name  = "db617636683.db.1and1.com";
			$database   = "db617636683";
			$user_name  = "dbo617636683";
			$password   = "UVMI3Kr4";

			$conn = mysql_connect($host_name, $user_name, $password);
	
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			include "update.php";
	
			mysql_select_db($database);
			
			$deadline = new DateTime("2017-04-03 13:05:00");
		?>		
	<style>
		html {
			height: 100%;
			width: 100%;
		}
		table {
			border-radius: 5px;
		}
		password {
			border-radius: 5px;
		}
		body {
			<?php 
			/*	$array = array();
			$hr=0;
			$sql = "select homeRuns from standings order by homeRuns desc, name limit 1";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while ($row = mysql_fetch_array($result)) {
					$hr = $row['homeRuns'];
				}
				
			$sql = "select color, homeRuns from standings order by homeRuns desc, name";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while ($row = mysql_fetch_array($result)) {
					if ($row['homeRuns'] == $hr) {
					
						$array[] = $row['color'];
					}
				}
			
			if (sizeof($array) == 1) {
				echo $array[0];
			}
			else
			{
				$str="";
				for ($i=0; $i< sizeof($array); $i++) {
					$str1 = ", ".$array[$i];
					$str .= $str1;
				}
				echo "linear-gradient(to right".$str.")";
			}*/
			
			if (new DateTime() > $deadline) {
				$sql = "select color from standings order by homeRuns desc, name limit 1";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while ($row = mysql_fetch_array($result)) {
					echo "background-color: ".$row['color'];
				}
			}
			else {
				echo "background-color: white";
			}
			?>
		}
		#picks {
			border-style: 6px;
			border-color: #ff0000;
		}
		a {
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
		* { 
			align: center;
			text-align: center;
		}
		table {
			align: center;
		}
		td {
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
		#wrap { 
			width: 1400px;
			margin: 0 auto;
		}
		#wid {
			width: "10";
		}	

		#nav {
			border-radius: 5px;
			width: 1400px;
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
		password {
			border: 1 thin;
			border-radius: 5px;
		}
	</style>

	<div id="wrap">
	<div id="nav">
	<ul>
		<?php
		if (new DateTime() > $deadline) {
			echo '<li><a href="http://homerunderby2k16theshow.com">Home</a></li>
		<li><a href="http://homerunderby2k16theshow.com/picks">Picks</a></li>';
		}
		?>
		<li><a href="https://venmo.com/Vinny-Ciorciari" target="_blank">Make Payment (Vinny's Venmo)</a></li>		
		<li><a href="http://espn.go.com" target="_blank"><img src="../img/espn.png" alt="espnLogo" style="width:100px;height:19px;"></a></li>		
		<li><a href="http://mlb.mlb.com" target="_blank"><img src="../img/mlb.png" alt="mlbLogo" style="width:100px;height:19px;"></a></li>
		<li style="float:right"><a id="click">
		<?php 
				date_default_timezone_set('America/New York');
				$date = date("F j, Y");
				$sql = "select date from date";
				$result = mysql_query($sql);
				
				while($row = mysql_fetch_assoc($result)){ 
				$time = strtotime($row['date']);
				}
				$updateTime = date("n/d/y g:i A", $time);
				echo $date;
			?>
		</a></li>
		<li style= "float:right"><a id="click"><div><span id="clock">&nbsp;</span></div></a></li>
	</ul>
	<marquee width="100%"></marquee>
	</div>
	<?php
	if (new DateTime() < $deadline) {
		echo '<b><u>TEAMS LOCK APRIL 3, 2016 AT 1:05 PM</u></b>';
	}
	?>
	<?php
	if (new DateTime() > $deadline) {
				echo '<a class="twitter-timeline" width="1000" height="250" href="https://twitter.com/MLBHR" data-widget-id="723360908542496770">Tweets by @MLBHR</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
							}
							else {
								
							}
	?>
	<div id="content"> Loading... </div>	
	</div>
	
	</body>
</html>