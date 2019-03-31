<?php
	session_start();
	$_SESSION['year'] = 2019;

	include("../../connect.php");
	include("../../update.php");

	$start = microtime(true);
	B();
	echo 'B updated<br>';
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>