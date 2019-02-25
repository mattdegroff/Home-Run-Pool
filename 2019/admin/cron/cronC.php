#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	$file = 'cronLog.txt';
	C();
	echo 'C updated<br>';
	$date = "[ ".date('Y-m-d H:i:s')." ]";
	file_put_contents($file, $date." C updated\n", FILE_APPEND);
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>