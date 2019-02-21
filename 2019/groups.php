<?php
	session_start();
	$_SESSION['year'] = 2019;
	print_r($_SESSION);
?>

<html>
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

printGroups();
											</body>
										</html>