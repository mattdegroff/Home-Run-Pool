<?php
	$host_name  = "enqhzd10cxh7hv2e.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	$database   = "hd40ir7zt9aw3ei4";
	$user_name  = "ywtwzhpn97kj2re7";
	$password   = "nlsjdvv2agb27hsn";

	$conn = mysqli_connect($host_name, $user_name, $password, $database);
	
	if ($conn->connect_error) {
		echo '<script>console.log("Connection failed: "' . $conn->connect_error . '");</script>';
	}
	else {
		echo '<script>console.log("Connection Established");</script>';
	}
?>