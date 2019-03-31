<?php
$year = $_SESSION['year'];

if ($year == 2015) {
	$connect_url = "CLEARDB_DATABASE_URL";
} else if ($year == 2016) {
	$connect_url = "CLEARDB_CHARCOAL_URL";
} else if ($year == 2017) {
	$connect_url = "CLEARDB_GOLD_URL";
} else if ($year == 2018) {
	$connect_url = "CLEARDB_ORANGE_URL";
} else if ($year == 2019) {
	$host_name  = "sql181.main-hosting.eu";
	$database   = "u993717719_2019";
	$user_name  = "u993717719_admin";
	$password   = "12345678";
}

if( $year != 2019) {
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
} else {
	$conn = mysqli_connect($host_name, $user_name, $password, $database);

	if (!$conn) {
		echo '<script>console.log("Connection failed: "' . mysqli_connect_errno() . '");</script>';
	}
	else {
		echo '<script>console.log("Connection Established");</script>';
	}
}
?>
