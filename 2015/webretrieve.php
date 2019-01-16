<?php
			include_once("connect.php");
				
			$start = microtime(true);	
				for ($i = 1; $i <= 6; $i++) {
			
				$sql = "select link from groupA where id=".$i;
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$link = $row['link'];
				}
				}
				
				echo $link."<br>";
				
				$len = strlen($link);
				
				$j = 0;
				while (substr($link, $j, 6) !== "/stats") {
					$j++;
				}
				$link = substr($link, 0, $j) . substr($link, $j+6);
						echo $link."<br>";
				}
			
				
				$end = microtime(true);
				$time = $end-$start;
				echo "time: ".$time;

?>