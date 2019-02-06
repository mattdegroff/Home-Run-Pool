<?php
$year = $_GET['year'];

if ($year == 2015) {
	$url = "CLEARDB_DATABASE_URL";
} else if ($year == 2016) {
	$url = "CLEARDB_CHARCOAL_URL";
} else if ($year == 2017) {
	$url = "CLEARDB_GOLD_URL";
} else if ($year == 2018) {
	$url = "CLEARDB_ORANGE_URL";
} else if ($year == 2019) {
	$url = "CLEARDB_JADE_URL";
}

$url = parse_url(getenv($url));

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
