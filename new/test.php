<html>
	<head>
	<title>Query string </title>
	</head>
	<body>

	<?php
		session_start();
		include("connect.php");
		include("details.php");
		include("update1.php");
		printGroups($deadline);
	?>
	
	</body>
	</html>
