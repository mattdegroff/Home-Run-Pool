<?php
	session_start();
	$_SESSION['year'] = 2019;

	include("../../connect.php");
	include("../../update.php");

	$start = microtime(true);
	$sql = "select code from standings";
	if ($result = $conn->query($sql)) {
		while($row = $result->fetch_assoc()){
			loadHR($row['code']);
		}
	}
	echo 'groups updated<br>';
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>