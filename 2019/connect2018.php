<?php
	$link = "CLEARDB_ORANGE_URL";

	$url = parse_url(getenv($link));

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);
	
	$conn = new mysqli($server, $username, $password, $db);
		if ($conn->connect_error) {
			echo '<script>console.log("Connection failed: ' . $conn->connect_error . '");</script>';
		}
		else {
			echo '<script>console.log("Connection Established");</script>';
		}
?>