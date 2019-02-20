
<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	$file = 'cronLog.txt';
	A();
	echo "A updated<br>";
	file_put_contents($file, Date()." A updated", FILE_APPEND);
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>