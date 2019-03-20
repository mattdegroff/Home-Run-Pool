#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	loadStandings();
	echo "standings updated<br>";
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>