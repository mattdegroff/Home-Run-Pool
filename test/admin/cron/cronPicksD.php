#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	picksD();
	echo "picks D updated<br>";
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>