<?php
	session_start();
	$_SESSION['year'] = 2019;
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
		
	</head>
<body>
<style>
		html {
			height: 100%;
			width: 100%;
		}
		table {
			border-radius: 5px;
		}
		#picks {
			border-style: 6px;
			border-color: #ff0000;
		}
		#drop {
			 color: rgba(0,0,0,.3);
		 }

		.card {
			margin-top: 10px;
		}

		* {
			font-size: 14px;
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
		#red {
			color: red;
		}

	</style>
	<?php
	include("details.php");
	include("update1.php");

	$deadline = new DateTime('2018-03-29T12:40:00', new DateTimeZone('America/New_York'));
	
	function printGroups($deadline) {
		global $conn;
		$sql = "select max(id) FROM standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}
			echo '<div class="row">';

			for ($i = 1; $i <= $max; $i++) {
				echo "<div class='col-lg-3'>";
				$sql = "select color, name, code, font, paid FROM standings where id=".$i;
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						if ($row['color'] == 'white') {
							echo '<div class="card" style="border-color: 1px solid rgba(0, 0, 0, 0.2)">';
						} else {
							echo '<div class="card" style="border-color: '.$row['color'].'">';
						}
						if ($row['font'] == 1) {
							echo '<div class="card-header text-center" id="dark" style="background-color: '.$row['color'].'">';
						} else if ($row['font'] == 2) {
							echo '<div class="card-header text-center" id="yellow" style="background-color: '.$row['color'].'">';
						} else if ($row['font'] == 3) {
							echo '<div class="card-header text-center" id="red" style="background-color: '.$row['color'].'">';
						} else {
							if ($row['color'] == 'white') {
								echo '<div class="card-header text-center" style="background-color: white; border-bottom: 1px solid rgba(0, 0, 0, 0.2);">';
							} else {
								echo '<div class="card-header text-center" style="background-color: '.$row['color'].'">';
							}
						}
						if ($row['paid'] == 1) {
							echo '<h5>'.$row['name'].'</h5></div>';
						} else {
							echo '<h5>*'.$row['name'].'*</h5></div>';
						}
							echo "</div>";
							echo "</div>";
					}
				}

				if ($i % 4 == 0) {
					if ($i == $max) {
						echo "</div>";
					} else {
						echo '</div><div class="row">';
					}
				} else {
					if ($i == $max) {
						$add = 4-($i%4);
						for ($j=1; $j <= $add; $j++) {
							echo '<div class="card" style="visibility: hidden;"></div>';
						}
						echo "</div>";
					}
				}
			}
		}
	?>
	<div class="row">
		<div class="container" style="margin-top: 15px;">
			<?php
				printGroups($deadline);
			?>
		</div>
	</div>
	</body>
</html>
<?php
session_destroy();
?>