#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	picksA();
	echo "picks A updated<br>";
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>