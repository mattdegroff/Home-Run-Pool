#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	HRTodayD();
	echo "today D updated<br>";
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>