<?php
	session_start();
	$_SESSION['year'] = 2019;
	print_r($_SESSION);
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
		
	?>
<div class="row">
		<div class="container-fluid">
			<?php
				printGroups($deadline);
			?>
		</div>
	</div>
				</table>
											</body>
										</html>
<?php
session_destroy();
?>