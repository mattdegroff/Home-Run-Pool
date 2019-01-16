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
			
			$deadline = new DateTime("2016-04-03 13:05:00");
			
			$q = $_REQUEST['q'];
			
			if ($q == 'A') {
				$sql = "select player, team, homeRuns, link from groupA";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
				}
			}
			else if ($q == 'B') {
				$sql = "select player, team, homeRuns, link from groupB";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
				}
			}
			else if ($q == 'C') {
				$sql = "select player, team, homeRuns, link from groupC";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
				}
			}
			if ($q == 'D') {
				$sql = "select firstName, lastName, team, homeRuns, link from groupD order by lastName";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					if ($row['lastName'] == 'Schwarber') {
						echo "<tr><td style='color: #DD0000'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</td><td style='color: #DD0000'>".$row['homeRuns']."</td></tr>";
					}
					else {
						echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
					}
				}
			}
			
			
		?>	