<?php
		session_start();

		if(!isset($_SESSION['year']) && !isset($_SESSION['page'])) {
			$_SESSION['year'] = 2019;
			$_SESSION['page'] = "totals";
		}
		include("details.php");
		include_once("update1.php");

		print_r($_SESSION);
	?>

