<?php
	$host_name  = "db617636683.db.1and1.com";
			$database   = "db617636683";
			$user_name  = "dbo617636683";
			$password   = "UVMI3Kr4";

			$conn = mysql_connect($host_name, $user_name, $password);
	
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
	
			mysql_select_db($database);
			
			include "update.php";
		
			save();
			
			function save() {
				
				$date = date("n/j", time()-(60*60*24));
				
				$sql = "alter table timelineA add `".$date."` int";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				$sql = "select player, homeRuns from groupA";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}	
				$array = array();
				$array1 = array();
				while($row = mysql_fetch_assoc($result)){
					$array[] = $row['player'];
					$array1[] = $row['homeRuns'];
				}
				for ($i = 0; $i < 6; $i++) {
					echo $array[$i];
					echo $array1[$i];
					$sql1 = "update timelineA set `".$date."`=".$array1[$i]." where player='".$array[$i]."'";
					echo $sql1;
					$result = mysql_query($sql1);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
				}
				
				$msg = "Column for ".$date." successfully created.";
				$mail = mail("mattdegroff@outlook.com","timeline updated",$msg);
				
				 if( $mail == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
				
			}
			
?>