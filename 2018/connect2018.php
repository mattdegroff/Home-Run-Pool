<?php
$connect_url = "CLEARDB_ORANGE_URL";
$url = parse_url(getenv($connect_url));

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
	/*$host_name  = "166.62.75.228";
	$database   = "2018";
	$user_name  = "mh37tmo638xn";
	$password   = "#UVMI3Kr4";

	$conn = mysqli_connect($host_name, $user_name, $password, $database);
	
	if ($conn->connect_error) {
		echo '<script>console.log("Connection failed: "' . $conn->connect_error . '");</script>';
	}
	else {
		echo '<script>console.log("Connection Established");</script>';
	}*/
?>