
<?php
	include_once("../connect.php");
	include "../update.php";
	
	$start = microtime(true);
	$file = 'cronLog.txt';
	A();
	$update = "A updated";
	echo $update.'<br>';
	$date = "[ ".date('Y-m-d H:i:s')." ]";
	file_put_contents($file, $date." A updated\n", FILE_APPEND);
	$end = microtime(true);
	$time = $end-$start;
	echo "time: ".$time;
?>