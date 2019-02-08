#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	HRTodayA();
	HRTodayB();
	HRTodayC();
	HRTodayD();
	echo "hr today updated";
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>