<?php
	$host_name  = "db667170268.db.1and1.com";
	$database   = "db667170268";
	$user_name  = "dbo667170268";
	$password   = "UVMI3Kr4";

	$conn = mysqli_connect($host_name, $user_name, $password, $database);
	
	if ($conn->connect_error) {
		echo '<script>console.log("Connection failed: "' . $conn->connect_error . '");</script>';
	}
	else {
		echo '<script>console.log("Connection Established");</script>';
	}
?>