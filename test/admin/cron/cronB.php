#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	$file = 'cronLog.txt';
	B();
	echo 'B updated<br>';
	$date = "[ ".date('Y-m-d H:i:s')." ]";
	file_put_contents($file, $date." B updated\n", FILE_APPEND);
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>