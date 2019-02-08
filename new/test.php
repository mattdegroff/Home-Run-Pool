<html>
	<head>
	<title>Query string </title>
	</head>
	<body>

	<?php
		session_start();
		print_r($_SESSION);
		include("connect.php");
		include("details.php");
		include("update1.php");
		printGroups($deadline);
	?>
	
	</body>
	</html>
