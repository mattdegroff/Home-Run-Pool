#!/usr/bin/php -q

<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	B();
	echo "B updated<br>";
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>