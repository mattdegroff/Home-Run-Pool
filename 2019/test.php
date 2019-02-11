<html>
	<head>
	<title>Query string </title>
	</head>
	<body>

	<?php
		session_start();
$_SESSION['year'] = 2019;
		print_r($_SESSION);
		include("details.php");
		include("update1.php");
		include("topRowAfter.php");
		printGroups($deadline);
	?>
	
	</body>
	</html>
