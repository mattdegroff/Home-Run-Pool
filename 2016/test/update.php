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
	
			function sum($table) {
				$sql = "select sum(homeRuns) from (select homeRuns from ".$table." order by homeRuns desc limit 7) as t";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					$sum = $row['sum(homeRuns)'];
				}
				
				return $sum;
			}
			
			function passPicks($table, $start, $end) {
				$char = '';
				for($i = $start; $i <= $end; $i++) {
					if ($i == 1) {
						$char = 'A';
					} else if ($i == 2) {
						$char = 'B';
					} else if ($i == 3 or $i == 4) {
						$char = 'C';
					} else {
						$char = 'D';
					}
				
				$sql = "select player from ".$table." where id=".$i;
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
	
				if ($rows = mysql_fetch_array($result)) {
					echo "<tr><td id='middle' width=30px>".$char."</td><td id='middle' width=170px>".$rows['player']."</td></tr>";
				} else {
					echo "<tr><td id='middle' width=30px>".$char."</td><td id='middle' width=170px>-------</td></tr>";
				}
				
				}
			}

			function hr($str, $pos) {
				$out = "";
				$out.= $str[$pos];
				if ($str[$pos+1] === "0") {									
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "1") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "2") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "3") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "4") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "5") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "6") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "7") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "8") {
					$out.= $str[$pos+1];
				}	else if ($str[$pos+1] === "9") {
					$out.= $str[$pos+1];
				}
					return $out;
			}
			
			function A() {
				for ($i = 1; $i <= 6; $i++) {
			
				$sql = "select link from groupA where id=".$i;
				$result = mysql_query($sql);
				$zero = 0;
				while ($rows = mysql_fetch_array($result)) {
					$link = $rows['link'];
				}		
				
				$str = file_get_contents($link);
				
				$scan = '<p>2016 Season</p>';
				$len = strlen($scan)+111;
				$pos = strpos($str, $scan);
				$pos+=$len;
				
				$out = hr($str, $pos);
				echo $out;
				
				$scan1 = '<td>2016 Regular Season</td>';
				$len1 = strlen($scan1);
				$pos1 = strpos($str, $scan1);
				$pos1+=$len1;
				$scan2 = '<td class="textright">';
				$len2 = strlen($scan2);
				for ($j = 1; $j <= 2; $j++) {
					$pos1 = strpos($str, $scan2, $pos1);
					$pos1 += $len2;
				}
				$ab = '';
				while ( $str[$pos1] != '<') {
					$ab .= $str[$pos1];
					$pos1++;
				}
				$abhr = $ab/$out;
				//echo $abhr;
				
				$sql1 = "UPDATE groupA SET AB=".$ab." WHERE id=".$i;
				//mysql_query($sql1);
				
				$sql2 = "UPDATE groupA SET ABHR=".$abhr." WHERE id=".$i;
				//mysql_query($sql2);
				
				$sql = "UPDATE groupA SET homeRuns=" . $out . " WHERE id=".$i;
				mysql_query($sql);	
				
				}
			}
			
			
			function B() {
		for ($i = 1; $i <= 10; $i++) {
			
				$sql = "select link from groupB where id=".$i;
				$result = mysql_query($sql);
				$zero = 0;
				while ($rows = mysql_fetch_array($result)) {
					$link = $rows['link'];
				}		
				
				$str = file_get_contents($link);
				
				$scan = '<p>2016 Season</p>';
				$len = strlen($scan)+111;
				$pos = strpos($str, $scan);
				$pos+=$len;
				
				$out = hr($str, $pos);
				echo $out;
				
				$scan1 = '<td>2016 Regular Season</td>';
				$len1 = strlen($scan1);
				$pos1 = strpos($str, $scan1);
				$pos1+=$len1;
				$scan2 = '<td class="textright">';
				$len2 = strlen($scan2);
				for ($j = 1; $j <= 2; $j++) {
					$pos1 = strpos($str, $scan2, $pos1);
					$pos1 += $len2;
				}
				$ab = '';
				while ( $str[$pos1] != '<') {
					$ab .= $str[$pos1];
					$pos1++;
				}
				$abhr = $ab/$out;
				//echo $abhr;
				
				$sql1 = "UPDATE groupB SET AB=".$ab." WHERE id=".$i;
				//mysql_query($sql1);
				
				$sql2 = "UPDATE groupB SET ABHR=".$abhr." WHERE id=".$i;
				//mysql_query($sql2);
				$sql = "UPDATE groupB SET homeRuns=" . $out . " WHERE id=".$i;
				mysql_query($sql);				
			}
			}
			
			function C() {
		for ($i = 1; $i <= 12; $i++) {
			
				$sql = "select link from groupC where id=".$i;
				$result = mysql_query($sql);
				$zero = 0;
				while ($rows = mysql_fetch_array($result)) {
					$link = $rows['link'];
				}		
				
				$str = file_get_contents($link);
				
				$scan = '<p>2016 Season</p>';
				$len = strlen($scan)+111;
				if (strpos($str, $scan)) {
				$pos = strpos($str, $scan);
				$pos+=$len;				
				$out = hr($str, $pos);
				} else {
					$out = 0;
				}
				echo $out;
				
				$scan1 = '<td>2016 Regular Season</td>';
				$len1 = strlen($scan1);
				$pos1 = strpos($str, $scan1);
				$pos1+=$len1;
				$scan2 = '<td class="textright">';
				$len2 = strlen($scan2);
				for ($j = 1; $j <= 2; $j++) {
					$pos1 = strpos($str, $scan2, $pos1);
					$pos1 += $len2;
				}
				$ab = '';
				while ( $str[$pos1] != '<') {
					$ab .= $str[$pos1];
					$pos1++;
				}
				$abhr = $ab/$out;
				//echo $abhr;
				
				$sql1 = "UPDATE groupC SET AB=".$ab." WHERE id=".$i;
				//mysql_query($sql1);
				
				$sql2 = "UPDATE groupC SET ABHR=".$abhr." WHERE id=".$i;
				//mysql_query($sql2);
				$sql = "UPDATE groupC SET homeRuns=" . $out . " WHERE id=".$i;
				mysql_query($sql);
		}
			}
			
			function D() {

				$sql = "select max(id) from groupD";
				$result = mysql_query($sql);
				
				while ($row = mysql_fetch_array($result)) {
					$max = $row['max(id)'];
				}
				for ($i = 1; $i <= $max; $i++) {
			
				$sql = "select link from groupD where id=".$i;
				$result = mysql_query($sql);
				while ($rows = mysql_fetch_array($result)) {
					$link = $rows['link'];
				}		
				
				$str = file_get_contents($link);
				
				$scan = '<p>2016 Season</p>';
				$len = strlen($scan)+111;
				$pos = strpos($str, $scan);
				$pos+=$len;
				
				$out = hr($str, $pos);
				echo $out;
				$scan1 = '<td>2016 Regular Season</td>';
				$len1 = strlen($scan1);
				$pos1 = strpos($str, $scan1);
				$pos1+=$len1;
				$scan2 = '<td class="textright">';
				$len2 = strlen($scan2);
				for ($j = 1; $j <= 2; $j++) {
					$pos1 = strpos($str, $scan2, $pos1);
					$pos1 += $len2;
				}
				$ab = '';
				while ( $str[$pos1] != '<') {
					$ab .= $str[$pos1];
					$pos1++;
				}
				$abhr = $ab/$out;
				//echo $abhr;
				
				$sql1 = "UPDATE groupD SET AB=".$ab." WHERE id=".$i;
				//mysql_query($sql1);
				
				$sql2 = "UPDATE groupD SET ABHR=".$abhr." WHERE id=".$i;
				//mysql_query($sql2);
				$sql = "UPDATE groupD SET homeRuns=" . $out . " WHERE id=".$i;
				mysql_query($sql);
				
				}
			}
			
			function loadHR($table) {
				$char = '';
				for($i = 1; $i <= 8; $i++) {
					if ($i == 1) {
						$char = 'A';
					} else if ($i == 2) {
						$char = 'B';
					} else if ($i == 3 or $i == 4) {
						$char = 'C';
					} else {
						$char = 'D';
					}
				
				$sql = "select pid from ".$table." where id=".$i;
				$result = mysql_query($sql);
				
				while ($rows = mysql_fetch_array($result)) {
					$pid = $rows['pid'];
				}				
				
				$sql = "select homeRuns from group".$char." where id=".$pid;
				$result = mysql_query($sql);
				
				while ($rows = mysql_fetch_array($result)) {
					$ab = $rows['AB'];
					$hr = $rows['homeRuns'];
					$abhr = $rows['ABHR'];
					
				$sql1 = "UPDATE ".$table." SET homeRuns=" . $hr . " WHERE id=".$i;
				mysql_query($sql1);
				//$sql2 = "UPDATE ".$table." SET AB=" . $ab . " WHERE id=".$i;
				//mysql_query($sql2);	
				//$sql3 = "UPDATE ".$table." SET ABHR=" . $abhr . " WHERE id=".$i;
				//mysql_query($sql3);					
				}				
			}
			}
			
			function update() {
				$start = microtime(true);
				A();
				echo "A updated<br>";
				B();
				echo "B updated<br>";
				C();
				echo "C updated<br>";
				D();
				echo "D updated<br>";
				loadHR('vinnyC');
				loadHR('matt');
				loadHR('ferg');
				loadHR('grup');
				loadHR('mistron');
				loadHR('davevonte');
				loadHR('vinnyS');
				loadHR('par');
				loadHR('scott');
				loadHR('kev');
				loadHR('tom');
				loadHR('ant');
				loadHR('julia');
				loadHR('nestor');
				loadHR('ariel');
				loadHR('lively');
				loadHR('rebekah');
				loadHR('zo');
				loadHR('mark');
				loadHR('kyle');
				loadHR('steve');
				loadHR('zippy');
				loadHR('pedowitz');
				echo "groups updated<br>";
				loadStandings();
				echo "standings updated<br>";
				loadRabbit();
				echo "rabbit updated<br>";
				//playing();
				//echo "playing updated<br>";
				HRTodayA();
				HRTodayB();
				HRTodayC();
				HRTodayD();
				echo "hr today updated";
				$end = microtime(true);
				$time = $end-$start;
				echo "time: ".$time;
				$sql = "update date set date=NOW() where id=1";
				mysql_query($sql);	
			}
			
			function printGroup($table) {
				$sql = "select id, homeRuns from ".$table." order by homeRuns desc limit 7";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					$id = $row['id'];
					$sql = "select max(id) from ".$table." where homeRuns = (select min(homeRuns) from ".$table.")";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					while($row1 = mysql_fetch_assoc($result)){
						$pid = $row1['max(id)'];
					}
				}	
				for ($i=1; $i <=8; $i++) {
				$sql = "select id, player, homeRuns from ".$table." where id=".$i;
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				$abhr = 0.00;
				while($row = mysql_fetch_assoc($result)){
					if ($pid === $row['id'])
					{
						echo "<tr><td><del>".$row['player']."</del></td><td><del>".$row['homeRuns']."</del></td></tr>";
					} 
					else {
						echo "<tr><td>".$row['player']."</td><td>".$row['homeRuns']."</td></tr>";
					}
				}
				}	
					$total=sum($table);
					echo "<tr><td><b>Total</b></td><td><b>".$total."</b></td><td></tr>";
	
			}
			
			function standings($deadline) {
				if (new DateTime() < $deadline) {
					$sql = "select color, name, font from standings order by name";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					$rank = 1;
					while ($row = mysql_fetch_array($result)) {
					$name = $row['name'];
					$color = $row['color'];
					$font = $row['font'];
					
						if ($font == 1) {
							echo '<tr><td id="dark" bgcolor='.$color.'>'.$rank.'</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>0</td><td id="dark" bgcolor='.$color.'>--</td></tr>';
						}
						else if ($font == 2) {
							echo '<tr><td id="yellow" bgcolor='.$color.'>'.$rank.'</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>0</td><td id="yellow" bgcolor='.$color.'>--</td></tr>';
						}
						else {
							echo '<tr><td bgcolor='.$color.'>'.$rank.'</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>0</td><td bgcolor='.$color.'>--</td></tr>';
						}
						$rank++;
					}
				} else {
					$rank = 1;				
				$sql = "select  name, color, homeRuns, font, code from standings order by homeRuns desc, name";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				$most = 0;
				$back = 0;
				while ($row = mysql_fetch_array($result)) {
					$name = $row['name'];
					$color = $row['color'];
					$hr = $row['homeRuns'];
					$font = $row['font'];
					$code = $row['code'];
					
					if ($rank == 1) {
						$most = $hr;
					}
					else {
						$back = $hr - $most;
					}
				
						if ($font == 1) {
							if ($rank == 1) {
								echo '<tr><td id="dark" bgcolor='.$color.'>'.$rank.'</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>'.$hr.'</td><td id="dark" bgcolor='.$color.'>--</td></tr>';
							}
							else if ($back == 0){
								echo '<tr><td id="dark" bgcolor='.$color.'>'.$rank.'</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>'.$hr.'</td><td id="dark" bgcolor='.$color.'>--</td></tr>';
							}
							else {
								echo '<tr><td id="dark" bgcolor='.$color.'>'.$rank.'</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>'.$hr.'</td><td id="dark" bgcolor='.$color.'>'.$back.'</td></tr>';
							}
							
						}
						else if ($font == 2) {
							if ($rank == 1) {
								echo '<tr><td id="yellow" bgcolor='.$color.'>'.$rank.'</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>'.$hr.'</td><td id="yellow" bgcolor='.$color.'>--</td></tr>';
							}
							else if ($back == 0){
								echo '<tr><td id="yellow" bgcolor='.$color.'>'.$rank.'</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>'.$hr.'</td><td id="yellow" bgcolor='.$color.'>--</td></tr>';
							}
							else {
								echo '<tr><td id="yellow" bgcolor='.$color.'>'.$rank.'</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>'.$hr.'</td><td id="yellow" bgcolor='.$color.'>'.$back.'</td></tr>';
							}
						}
						else {
							if ($rank == 1) {
								echo '<tr><td bgcolor='.$color.'>'.$rank.'</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>'.$hr.'</td><td bgcolor='.$color.'>--</td></tr>';
							}
							else if ($back == 0){
								echo '<tr><td bgcolor='.$color.'>'.$rank.'</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>'.$hr.'</td><td bgcolor='.$color.'>--</td></tr>';
							}
							else {
								echo '<tr><td bgcolor='.$color.'>'.$rank.'</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>'.$hr.'</td><td bgcolor='.$color.'>'.$back.'</td></tr>';
							}
						}
					$rank++;
				}
				}
			}
			
			function loadStandings() {
				$sql = "select code from standings";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				$sum = 0;
				
				while ($row = mysql_fetch_array($result)) {
					$sum = sum($row['code']);
					
					$sql1 = "update standings set homeRuns=".sum($row['code'])." where code='".$row['code']."'";
					$result1 = mysql_query($sql1);
				
				}
			
			}
			
			function rabbitD() {
				$id=5;
				$rabbit = array();
				$pos = 0;
				while ($id <= 8) {
					$match = 0;
					while ($match == 0) {
						$str = file_get_contents('http://espn.go.com/mlb/stats/batting/_/sort/homeRuns/order/true');
						$scan = 'http://espn.go.com/mlb/player/_';
						$scan0 = ">";
						$len = strlen($scan);
						$pos = strpos($str, $scan, $pos);
						$pos+=$len;	
						$pos = strpos($str, $scan0, $pos);
						$pos++;	
						$out='';
						while ($str[$pos] != '<')
						{
							$out.= $str[$pos];
							$pos++;
						}
						print $out;
						$scan1 = 'class="sortcell">';
						$pos = strpos($str, $scan1, $pos);
						$pos+=strlen($scan1);
						$hr = hr($str, $pos);
						print $hr;
				
						$match = 1;
						$sql = "select player from groupA";
						$result = mysql_query($sql);
				
						while ($rows = mysql_fetch_array($result)) {
							$player = $rows['player'];
							if ($player == $out) {
								$match =0;
							}
						}
				
						if ($match === 1) {
							$sql = "select player from groupB";
							$result = mysql_query($sql);
				
							while ($rows = mysql_fetch_array($result)) {
								$player = $rows['player'];
								if ($player == $out) {
									$match = 0;
								}
							}
						}
				
						if ($match === 1) {
							$sql = "select player from groupC";
							$result = mysql_query($sql);
					
							while ($rows = mysql_fetch_array($result)) {
								$player = $rows['player'];
								if ($player == $out) {
									$match = 0;
								}
							}
						}
				
						if ($match === 1) {
							for ($i = 0; $i < sizeof($rabbit); $i++) {
								$name = $rabbit[$i];
								if ($out == $name) {
									$match = 0;
								}
							}
						}
					}
				
					$sql = "update rabbit set player='".$out."', homeRuns=".$hr." where id=".$id;
					print $sql;
					mysql_query($sql);
					if (!mysql_query($sql)) {
						die('Invalid query: ' . mysql_error());
					}
			
					$id++;
					$rabbit[] = $out;
				}
			}
			
			function loadRabbit() {
						
			$sql = 'select player, homeRuns from groupA order by homeRuns desc limit 1';
			$result = mysql_query($sql);
			if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			
			while($row = mysql_fetch_assoc($result)){
				$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=1";
				mysql_query($sql);
				if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			}
				
			$sql = 'select player, homeRuns from groupB order by homeRuns desc limit 1';
			$result = mysql_query($sql);
			if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			
			while($row = mysql_fetch_assoc($result)){
				$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=2";
				mysql_query($sql);
				if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			}
				
			$sql = 'select player, homeRuns from groupC order by homeRuns desc limit 1';
			$result = mysql_query($sql);
			if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			
			while($row = mysql_fetch_assoc($result)){
				$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=3";
				mysql_query($sql);
				if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			}				
				
			$sql = 'select player, homeRuns from groupC order by homeRuns desc limit 1 offset 1';
			$result = mysql_query($sql);
			if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			
			while($row = mysql_fetch_assoc($result)){
				$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=4";
				mysql_query($sql);
				if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			}
			
			rabbitD();
			}
			
			function printRabbit($deadline) {
				$sql = "select id, player, homeRuns from rabbit order by homeRuns desc limit 7";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					$id = $row['id'];
					$sql = "select max(id) from rabbit where homeRuns = (select min(homeRuns) from rabbit)";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					while($row1 = mysql_fetch_assoc($result)){
						$pid = $row1['max(id)'];
					}
				}	
				
				$sql = "select id, player, homeRuns, gr, color from rabbit";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				if (new DateTime() > $deadline) {
				while($row = mysql_fetch_assoc($result)){
					
					if ($pid === $row['id'])
					{
						echo "<tr><td bgcolor=".$row['color'].">".$row['gr']."</td><td bgcolor=".$row['color']."><del>".$row['player']."</del></td><td bgcolor=".$row['color']."><del>".$row['homeRuns']."</del></td></tr>";
					} 
					else {
						echo "<tr><td bgcolor=".$row['color'].">".$row['gr']."</td><td bgcolor=".$row['color'].">".$row['player']."</td><td bgcolor=".$row['color'].">".$row['homeRuns']."</td></tr>";
					}
					
				}
				}
					else {
						echo "<tr><td bgcolor=#ffd700>A</td><td bgcolor=#ffd700> ------- </td><td bgcolor=#ffd700> -- </td></tr>";	
						echo "<tr><td bgcolor=silver>B</td><td bgcolor=silver> ------- </td><td bgcolor=silver> -- </td></tr>";	
						echo "<tr><td bgcolor=#cd7f32>C</td><td bgcolor=#cd7f32> ------- </td><td bgcolor=#cd7f32> -- </td></tr>";
						echo "<tr><td bgcolor=#cd7f32>C</td><td bgcolor=#cd7f32> ------- </td><td bgcolor=#cd7f32> -- </td></tr>";	
						echo "<tr><td bgcolor=#a4c639>D</td><td bgcolor=#a4c639> ------- </td><td bgcolor=#a4c639> -- </td></tr>";
						echo "<tr><td bgcolor=#a4c639>D</td><td bgcolor=#a4c639> ------- </td><td bgcolor=#a4c639> -- </td></tr>";
						echo "<tr><td bgcolor=#a4c639>D</td><td bgcolor=#a4c639> ------- </td><td bgcolor=#a4c639> -- </td></tr>";
						echo "<tr><td bgcolor=#a4c639>D</td><td bgcolor=#a4c639> ------- </td><td bgcolor=#a4c639> -- </td></tr>";
					}

					if (new DateTime() > $deadline) {
						$total=sum('rabbit');
						echo "<tr><td></td><td id='dark'>Total</td><td id='dark'><b>".$total."</b></td></tr>";
					}
					else {
						echo "<tr><td></td><td id='dark'>Total</td><td id='dark'><b>0</b></td></tr>";
					}
			}	

			function playing() {
				$play = array();
				$inning = array();
				$D = array();
				$a=0;
				$b=0;
				$c=0;
				$d=0;
				
				$sql = "delete from playing";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid querydel: ' . mysql_error());
				}
				
				$sql="update groupA set inning=''";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid querydel: ' . mysql_error());
				}
				
				$sql="update groupB set inning=''";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid querydel: ' . mysql_error());
				}
				
				$sql="update groupC set inning=''";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid querydel: ' . mysql_error());
				}
				
				$sql="update groupD set inning=''";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid querydel: ' . mysql_error());
				}
				
				$sql = "select player, link from groupA";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid queryA: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					$str = file_get_contents($row['link']);
					$scan = ' CURRENT GAME<';
					if (strpos($str, $scan)) {
						$a++;
						$scan1 = '<div class="time">';
						$len = strlen($scan1);
						$pos = strpos($str, $scan1) + $len;
						$inn = '';
						while ($str[$pos] != '<') {
							$inn .= $str[$pos];
							$pos++;
						}
						$play[] = $row['player']; 
						$inning[] = $inn;
					}
				}
				
				$sql = "select player, link from groupB";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid queryB: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					$str = file_get_contents($row['link']);
					$scan = ' CURRENT GAME<';
					if (strpos($str, $scan)) {
						$b++;
						$scan1 = '<div class="time">';
						$len = strlen($scan1);
						$pos = strpos($str, $scan1) + $len;
						$inn = '';
						while ($str[$pos] != '<') {
							$inn .= $str[$pos];
							$pos++;
						}
						$play[] = $row['player']; 
						$inning[] = $inn;
					}
				}
				
				$sql = "select player, link from groupC";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid queryC: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					$str = file_get_contents($row['link']);
					$scan = ' CURRENT GAME<';
					if (strpos($str, $scan)) {
						$c++;
						$scan1 = '<div class="time">';
						$len = strlen($scan1);
						$pos = strpos($str, $scan1) + $len;
						$inn = '';
						while ($str[$pos] != '<') {
							$inn .= $str[$pos];
							$pos++;
						}
						$play[] = $row['player']; 
						$inning[] = $inn;					
					}
				}
				
				$sql = "select firstName, lastName, link from groupD";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid queryD: ' . mysql_error());
				}
				
				while($row = mysql_fetch_assoc($result)){
					$str = file_get_contents($row['link']);
					$scan = ' CURRENT GAME<';
					if (strpos($str, $scan)) {
						$d++;
						$scan1 = '<div class="time">';
						$len = strlen($scan1);
						$pos = strpos($str, $scan1) + $len;
						$inn = '';
						while ($str[$pos] != '<') {
							$inn .= $str[$pos];
							$pos++;
						}
						$playstr = $row['firstName']." ".$row['lastName'];
						$play[] = $playstr;
						$D[] = $row['lastName'];
						$inning[] = $inn;
					}
				}	
				
				//echo $a." ";
				//echo $b." ";
				//echo $c." ";
				//echo $d." ";
				//echo count($play)." ";
				//echo count($inning)." ";
				
				for ($i=0; $i < count($play); $i++) {
					$sql = "insert into playing (players, inning) values ('".$play[$i]."', '".$inning[$i]."')";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid query1: ' . mysql_error());
					}
					if ($i < $a) {
					//echo $inning[$i];
					//echo $play[$i]."<br>";
					$sql = "update groupA set inning='".$inning[$i]."' where player='".$play[$i]."'";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryA1: ' . mysql_error());
					}
					}
				
					if ($i >= $a && $i < ($a+$b)) {
					//echo $inning[$i];
					//echo $play[$i]."<br>";
					$sql = "update groupB set inning='".$inning[$i]."' where player='".$play[$i]."'";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryB1: ' . mysql_error());
					}
					}
				
				if ($i >= ($a+$b) && $i < ($a+$b+$c)) {
					//echo $inning[$i];
					//echo $play[$i]."<br>";
					$sql = "update groupC set inning='".$inning[$i]."' where player='".$play[$i]."'";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryC1: ' . mysql_error());
					}
				}
				
				if ($i >= ($a+$b+$c)) {
					//echo $inning[$i];
					//echo $play[$i];
					//echo $i-($a+$b+$c);
					//echo $D[$i-($a+$b+$c)]."<br>";
					$sql = "update groupD set inning='".$inning[$i]."' where lastName='".$D[$i-($a+$b+$c)]."'";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryD1: ' . mysql_error());
					}
				}
				}
			}
			
			function HRTodayA() {
				for ($i = 1; $i <= 6; $i++) {
					
				$sql = "select player, link from groupA where id=".$i;
				$result = mysql_query($sql);
				$zero = 0;
				while ($row = mysql_fetch_array($result)) {
					$link = $row['link'];
					$player = $row['player'];
				}		
				
				$str = file_get_contents($link);
				$scan = '<td>This Game</td>';
				$len = strlen($scan);
				$hr=0;
				if (strpos($str, $scan)) {
					$pos = strpos($str, $scan) + $len; 
					for ($j=0; $j < 11; $j++) {	
						$scan1 = '>';
						$len1 = strlen($scan1);
						$pos = strpos($str, $scan1, $pos) + $len1;
					}					
					$hr = $str[$pos];
					echo $player." (".$hr.")<br>";
				}
				else {
					$hr=0;
				}
				if ($hr > 0) {
					$match = 0;
						$sql = "select player from today";
						echo $sql."<br>";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)) {
							if ($row['player'] == $player) {
								$match = 1;
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$player."'";
						}
						else {
							$sql = "insert into today (player, HR) values ('".$player."', ".$hr.")";
						}
						echo $sql."<br>";
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryC1: ' . mysql_error());
					}				
				}
				}
			}
			
			function HRTodayB() {
				for ($i=1; $i <= 10; $i++) {
					$sql = "select player, link from groupB where id=".$i;
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryb1: ' . mysql_error());
					}
				
					while ($row = mysql_fetch_array($result)) {
						$link=$row['link'];
						$player = $row['player'];
						
					}
				
					$str = file_get_contents($link);
					$scan = '<td>This Game</td>';
					$len = strlen($scan);
					if (strpos($str, $scan)) {
						$pos = strpos($str, $scan) + $len; 
						for ($j=0; $j < 11; $j++) {	
							$scan1 = '>';
							$len1 = strlen($scan1);
							$pos = strpos($str, $scan1, $pos) + $len1;
						}
						$hr = '';
						$hr .= $str[$pos];
						echo $player." (".$hr.")<br>";
					}
					else {
						$hr=0;
					}
					if ($hr > 0) {
						$match = 0;
						$sql = "select player from today";
						echo $sql."<br>";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)) {
							if ($row['player'] == $player) {
								$match = 1;
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$player."'";
						}
						else {
							$sql = "insert into today (player, HR) values ('".$player."', ".$hr.")";
						}
						echo $sql."<br>";
						$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryC1: ' . mysql_error());
					}			
					}
				}
			}
			
			function HRTodayC() {				
				for ($i=1; $i <= 12; $i++) {
					$sql = "select player, link from groupC where id=".$i;
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryc1: ' . mysql_error());
					}
				
					while ($row = mysql_fetch_array($result)) {
						$link=$row['link'];
						$player = $row['player'];
					}
				
					$str = file_get_contents($link);
					$scan = '<td>This Game</td>';
					$len = strlen($scan);
					if (strpos($str, $scan)) {
						$pos = strpos($str, $scan) + $len; 
						for ($j=0; $j < 11; $j++) {	
							$scan1 = '>';
							$len1 = strlen($scan1);
							$pos = strpos($str, $scan1, $pos) + $len1;
						}
						$hr = '';
						$hr .= $str[$pos];
						echo $player." (".$hr.")<br>";
					}
					else {
						$hr=0;
					}
					if ($hr > 0) {
						$match = 0;
						$sql = "select player from today";
						echo $sql."<br>";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)) {
							if ($row['player'] == $player) {
								$match = 1;
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$player."'";
						}
						else {
							$sql = "insert into today (player, HR) values ('".$player."', ".$hr.")";
						}
						echo $sql."<br>";
						$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryC1: ' . mysql_error());
					}			
					}
				}
			}
			
			function HRTodayD() {				
				for ($i=1; $i <= 30; $i++) {
					$sql = "select firstName, lastName, link from groupD where id=".$i;
					$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryd1: ' . mysql_error());
					}
				
					while ($row = mysql_fetch_array($result)) {
						$link=$row['link'];
						$first = $row['firstName'];
						$last = $row['lastName'];
					}
				
					$str = file_get_contents($link);
					$scan = '<td>This Game</td>';
					$len = strlen($scan);
					$hr='';
					if (strpos($str, $scan)) {
						$pos = strpos($str, $scan) + $len; 
						for ($j=0; $j < 11; $j++) {	
							$scan1 = '>';
							$len1 = strlen($scan1);
							$pos = strpos($str, $scan1, $pos) + $len1;
						}
						$hr .= $str[$pos];
						echo $first." ".$last." (".$hr.")<br>";
					}
					else {
						$hr=0;
					}
					if ($hr > 0) {
						$match = 0;
						$sql = "select player from today";
						echo $sql."<br>";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)) {
							if ($row['player'] == $first." ".$last) {
								$match = 1;
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$first." ".$last."'";
						}
						else {
							$sql = "insert into today (player, HR) values ('".$first." ".$last."', ".$hr.")";
						}
						echo $sql."<br>";
						$result = mysql_query($sql);
					if (!$result) {
						die('Invalid queryC1: ' . mysql_error());
					}				
					}
				}
			}
		?>