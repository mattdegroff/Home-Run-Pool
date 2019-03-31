
<?php
	session_start();
	$_SESSION['year'] = 2019;

	print_r($_SESSION);
	include("../../connect.php");
	include("../../update.php");

	//update();
?>
