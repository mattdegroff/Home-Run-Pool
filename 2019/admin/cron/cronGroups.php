#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	$sql = "select code from standings";
	if ($result = $conn->query($sql)) {
		while($row = $result->fetch_assoc()){
			loadHR($row['code']);
		}
	}
	$file = 'cronLog.txt';
	echo 'groups updated<br>';
	$date = "[ ".date('Y-m-d H:i:s')." ]";
	file_put_contents($file, $date." groups updated\n", FILE_APPEND);
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>