<?php
	session_start();
	$_SESSION['year'] = 2019;

	include("../../connect.php");
	include("../../update.php");

	$start = microtime(true);
	picksC();
	echo 'picks C updated<br>';
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>