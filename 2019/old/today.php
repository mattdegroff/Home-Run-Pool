<?php			
 $host_name  = "db617636683.db.1and1.com";
			$database   = "db617636683";
			$user_name  = "dbo617636683";
			$password   = "UVMI3Kr4";

			$conn = mysql_connect($host_name, $user_name, $password);
	
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
	
			include "update.php";
	
			mysql_select_db($database);
			
			HRTodayA();
			HRTodayB();
			HRTodayC();
			HRTodayD();
			?>