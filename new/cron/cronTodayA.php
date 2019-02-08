#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	HRTodayA();
	echo "today A updated<br>";
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>