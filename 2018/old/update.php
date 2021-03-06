<?php			
	include("connect.php");
	$colorA = '#00cc66';
	$colorB = '#d9d9d9';
	$colorC = '#00cc66';
	$colorD = '#d9d9d9';
	$countA = 6;
	$countB = 11;
	$countC = 16;
	if (new DateTime() > new DateTime("2018-03-29 12:40:00")) {
		$year = "2018";
	} else {
		$year = "2017";
	}
	
			function sum($table) {
				global $conn;
				$sql = "select sum(homeRuns) from (select homeRuns from ".$table." order by homeRuns desc limit 7) as t";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$sum = $row['sum(homeRuns)'];
					}
				}
				
				return $sum;
			}
			
			function passPicks($table, $start, $end) {
				global $conn;
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
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							echo "<tr><td id='middle' width=30px>".$char."</td><td id='middle' width=170px>".$row['player']."</td></tr>";
						}
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
			
			function convertTeam($full) {
				//AL West
				if ($full == "Baltimore Orioles")
					return "BAL";
				if ($full == "Boston Red Sox")
					return "BOS";
				if ($full == "New York Yankees")
					return "NYY";
				if ($full == "Tampa Bay Rays")
					return "TB";				
				if ($full == "Toronto Blue Jays")
					return "TOR";

				//AL Central				
				if ($full == "Chicago White Sox")
					return "CWS";				
				if ($full == "Cleveland Indians")
					return "CLE";				
				if ($full == "Detroit Tigers")
					return "DET";				
				if ($full == "Kansas City Royals")
					return "KC";				
				if ($full == "Minnesota Twins")
					return "MIN";

				//AL West				
				if ($full == "Houston Astros")
					return "HOU";				
				if ($full == "Los Angeles Angels")
					return "LAA";				
				if ($full == "Oakland Athletics")
					return "OAK";				
				if ($full == "Seattle Mariners")
					return "SEA";				
				if ($full == "Texas Rangers")
					return "TEX";

				//NL East				
				if ($full == "Atlanta Braves")
					return "ATL";				
				if ($full == "Miami Marlins")
					return "MIA";				
				if ($full == "New York Mets")
					return "NYM";				
				if ($full == "Philadelphia Phillies")
					return "PHI";				
				if ($full == "Washington Nationals")
					return "WAS";

				//NL Central				
				if ($full == "Chicago Cubs")
					return "CHC";				
				if ($full == "Cincinnati Reds")
					return "CIN";				
				if ($full == "Milwaukee Brewers")
					return "MIL";				
				if ($full == "Pittsburgh Pirates")
					return "PIT";				
				if ($full == "St. Louis Cardinals")
					return "STL";

				//NL West				
				if ($full == "Arizona Diamondbacks")
					return "ARI";				
				if ($full == "Colorado Rockies")
					return "COL";				
				if ($full == "Los Angeles Dodgers")
					return "LAD";				
				if ($full == "San Diego Padres")
					return "SD";				
				if ($full == "San Francisco Giants")
					return "SF";

				return "FA";
			}

			function A() {
				global $conn;
				global $year, $countA;
				for ($i = 1; $i <= $countA; $i++) {
					$zero = 0;
					$sql = "select link from groupA where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
						}
					}		
				
					$str = file_get_contents($link);
				
					$scan = "<p>". $year . " Season</p>";
					$len = strlen($scan)+111;
					$pos = strpos($str, $scan);
					if ($pos == false) {
						$sql = "UPDATE groupA SET homeRuns=0 WHERE id=".$i;
						$conn->query($sql);
						echo "0";						
						continue;
					}
					$pos+=$len;
				
					$out = hr($str, $pos);
					echo $out;
				
					$scan1 = '<li class="last"><a href=';
					$len1 = strlen($scan1);
					$pos1 = strpos($str, $scan1);
					$pos1+=$len1;
					while ( $str[$pos1] != '>' ) {
						$pos1++;
					}
					$pos1++;
					$team = '';
					while ( $str[$pos1] != '<') {
						$team .= $str[$pos1];
						$pos1++;
					}
					$teamABR = convertTeam($team);

					$sql = "UPDATE groupA SET homeRuns=" . $out . ", team='" . $teamABR . "' WHERE id=".$i;
					$conn->query($sql);	
				}
			}
			
			function B() {
				global $conn;
				global $year, $countB;
				for ($i = 1; $i <= $countB; $i++) {
					$zero = 0;
					$sql = "select link from groupB where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
						}
					}		
				
					$str = file_get_contents($link);
				
					$scan = "<p>". $year . " Season</p>";
					$len = strlen($scan)+111;
					$pos = strpos($str, $scan);
					if ($pos == false) {
						$sql = "UPDATE groupB SET homeRuns=0 WHERE id=".$i;
						$conn->query($sql);
						echo "0";						
						continue;
					}
					$pos+=$len;
				
					$out = hr($str, $pos);
					echo $out;
				
					$scan1 = '<li class="last"><a href=';
					$len1 = strlen($scan1);
					$pos1 = strpos($str, $scan1);
					$pos1+=$len1;
					while ( $str[$pos1] != '>' ) {
						$pos1++;
					}
					$pos1++;
					$team = '';
					while ( $str[$pos1] != '<') {
						$team .= $str[$pos1];
						$pos1++;
					}

					$teamABR = convertTeam($team);

					$sql = "UPDATE groupB SET homeRuns=" . $out . ", team='" . $teamABR . "' WHERE id=".$i;
					$conn->query($sql);
				}
			}
			
			function C() {
				global $conn;
				global $year, $countC;
				for ($i = 1; $i <= $countC; $i++) {
					$zero = 0;
					$sql = "select link from groupC where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
						}
					}		
				
					$str = file_get_contents($link);
				
					$scan = "<p>". $year . " Season</p>";
					$len = strlen($scan)+111;
					$pos = strpos($str, $scan);
					if ($pos == false) {
						$sql = "UPDATE groupC SET homeRuns=0 WHERE id=".$i;
						$conn->query($sql);
						echo "0";						
						continue;
					}
					$pos+=$len;
				
					$out = hr($str, $pos);
					echo $out;
				
					$scan1 = '<li class="last"><a href=';
					$len1 = strlen($scan1);
					$pos1 = strpos($str, $scan1);
					$pos1+=$len1;
					while ( $str[$pos1] != '>' ) {
						$pos1++;
					}
					$pos1++;
					$team = '';
					while ( $str[$pos1] != '<') {
						$team .= $str[$pos1];
						$pos1++;
					}

					$teamABR = convertTeam($team);

					$sql = "UPDATE groupC SET homeRuns=" . $out . ", team='" . $teamABR . "' WHERE id=".$i;
					$conn->query($sql);	
				}
			}
			
			function D() {
				global $conn;
				global $year;
				$sql = "select max(id) from groupD";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$max = $row['max(id)'];
					}
				}
				for ($i = 1; $i <= $max; $i++) {
					$zero = 0;
					$sql = "select link from groupD where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
						}
					}		
				
					$str = file_get_contents($link);
				
					$scan = "<p>". $year . " Season</p>";
					$len = strlen($scan)+111;
					$pos = strpos($str, $scan);
					if ($pos == false) {
						$sql = "UPDATE groupD SET homeRuns=0 WHERE id=".$i;
						$conn->query($sql);
						echo "0";						
						continue;
					}
					$pos+=$len;
				
					$out = hr($str, $pos);
					echo $out;
				
					$scan1 = '<li class="last"><a href=';
					$len1 = strlen($scan1);
					$pos1 = strpos($str, $scan1);
					$pos1+=$len1;
					while ( $str[$pos1] != '>' ) {
						$pos1++;
					}
					$pos1++;
					$team = '';
					while ( $str[$pos1] != '<') {
						$team .= $str[$pos1];
						$pos1++;
					}

					$teamABR = convertTeam($team);

					$sql = "UPDATE groupD SET homeRuns=" . $out . ", team='" . $teamABR . "' WHERE id=".$i;
					$conn->query($sql);
				}
			}
			
			function loadHR($table) {
				global $conn;
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
					if ($result = $conn->query($sql)) {
						while($row = $result->fetch_assoc()){
							$pid = $row['pid'];
						}
					}				
				
					$sql = "select homeRuns from group".$char." where id=".$pid;
					if ($result = $conn->query($sql)) {
						while($row = $result->fetch_assoc()){
							$hr = $row['homeRuns'];
					
							$sql1 = "UPDATE ".$table." SET homeRuns=" . $hr . " WHERE id=".$i;
							if ($result1 = $conn->query($sql1)) {
								//echo $table.$i." updated\n";
							}
						}				
					}
				}
			}
			
			function update() {
				global $conn;
				$start = microtime(true);
				A();
				echo "A updated<br>";
				B();
				echo "B updated<br>";
				C();
				echo "C updated<br>";
				D();
				echo "D updated<br>";
				$sql = "select code from standings";
					if ($result = $conn->query($sql)) {
						while($row = $result->fetch_assoc()){
							loadHR($row['code']);
						}
					}
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
			}
			
			function printGroup($table) {
				global $conn;
				$sql = "select id, homeRuns from ".$table." order by homeRuns desc limit 7";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$id = $row['id'];
						$sql = "select max(id) from ".$table." where homeRuns = (select min(homeRuns) from ".$table.")";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row1 = $result->fetch_assoc()){
								$pid = $row1['max(id)'];
							}
						}
					}
				}	
				for ($i=1; $i <=8; $i++) {
					$sql = "select id, player, homeRuns from ".$table." where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo "<tr><td><del>".$row['player']."</del></td><td><del>".$row['homeRuns']."</del></td></tr>";
							} else {
								echo "<tr><td>".$row['player']."</td><td>".$row['homeRuns']."</td></tr>";
							}
						}
					}	
					$total=sum($table);
				}
				echo "<tr><td><b>Total</b></td><td><b>".$total."</b></td><td></tr>";
			}
			
			function standings($deadline) {
				global $conn;
				if (new DateTime() < $deadline) {
					$rank = 1;
					$sql = "select color, name, font from standings order by name";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$name = $row['name'];
							$color = $row['color'];
							$font = $row['font'];
					
							if ($font == 1) {
								echo '<tr><td id="dark" bgcolor='.$color.'>'.$rank.'</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>0</td><td id="dark" bgcolor='.$color.'>--</td></tr>';
							} else if ($font == 2) {
								echo '<tr><td id="yellow" bgcolor='.$color.'>'.$rank.'</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>0</td><td id="yellow" bgcolor='.$color.'>--</td></tr>';
							} else if ($font == 3) {
								echo '<tr><td id="red" bgcolor='.$color.'>'.$rank.'</td><td id="red" bgcolor='.$color.'>'.$name.'</td><td id="red" bgcolor='.$color.'>0</td><td id="red" bgcolor='.$color.'>--</td></tr>';
							} else {
								echo '<tr><td bgcolor='.$color.'>'.$rank.'</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>0</td><td bgcolor='.$color.'>--</td></tr>';
							}
							$rank++;
						}
					}
				} else {
					$rank = 1;		
					$most = 0;
					$back = 0;
					$prev = 0;
					$prevHR = 0;
					$sql = "select  name, color, homeRuns, font, code from standings order by homeRuns desc, name";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$name = $row['name'];
							$color = $row['color'];
							$hr = $row['homeRuns'];
							$font = $row['font'];
							$code = $row['code'];
					
							if ($rank == 1) {
								$most = $hr;
								$prev = $rank;
								$prevHR = $hr;
							} else {
								$back = $hr - $most;
							}
				
							if ($font == 1) {
								if ($rank == 1) {
									echo '<tr><td id="dark" bgcolor='.$color.'>'.$rank.'</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>'.$hr.'</td><td id="dark" bgcolor='.$color.'>--</td></tr>';
								} else if ($back == 0){
									echo '<tr><td id="dark" bgcolor='.$color.'>--</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>'.$hr.'</td><td id="dark" bgcolor='.$color.'>--</td></tr>';
								} else {
									if ($hr == $prevHR) {
										echo '<tr><td id="dark" bgcolor='.$color.'>--</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>'.$hr.'</td><td id="dark" bgcolor='.$color.'>'.$back.'</td></tr>';
									} else {
										echo '<tr><td id="dark" bgcolor='.$color.'>'.$rank.'</td><td id="dark" bgcolor='.$color.'>'.$name.'</td><td id="dark" bgcolor='.$color.'>'.$hr.'</td><td id="dark" bgcolor='.$color.'>'.$back.'</td></tr>';
										$prev = $rank;	
									}
								}
							} else if ($font == 2) {
								if ($rank == 1) {
									echo '<tr><td id="yellow" bgcolor='.$color.'>'.$rank.'</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>'.$hr.'</td><td id="yellow" bgcolor='.$color.'>--</td></tr>';
								} else if ($back == 0){
									echo '<tr><td id="yellow" bgcolor='.$color.'>--</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>'.$hr.'</td><td id="yellow" bgcolor='.$color.'>--</td></tr>';
								} else {
									if ($hr == $prevHR) {
										echo '<tr><td id="yellow" bgcolor='.$color.'>--</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>'.$hr.'</td><td id="yellow" bgcolor='.$color.'>'.$back.'</td></tr>';
									} else {
										echo '<tr><td id="yellow" bgcolor='.$color.'>'.$rank.'</td><td id="yellow" bgcolor='.$color.'>'.$name.'</td><td id="yellow" bgcolor='.$color.'>'.$hr.'</td><td id="yellow" bgcolor='.$color.'>'.$back.'</td></tr>';
										$prev = $rank;	
									}
								}
							} else if ($font == 3) {
								if ($rank == 1) {
									echo '<tr><td id="red" bgcolor='.$color.'>'.$rank.'</td><td id="red" bgcolor='.$color.'>'.$name.'</td><td id="red" bgcolor='.$color.'>'.$hr.'</td><td id="red" bgcolor='.$color.'>--</td></tr>';
								} else if ($back == 0){
									echo '<tr><td id="red" bgcolor='.$color.'>--</td><td id="red" bgcolor='.$color.'>'.$name.'</td><td id="red" bgcolor='.$color.'>'.$hr.'</td><td id="red" bgcolor='.$color.'>--</td></tr>';
								} else {
									if ($hr == $prevHR) {
										echo '<tr><td id="red" bgcolor='.$color.'>--</td><td id="red" bgcolor='.$color.'>'.$name.'</td><td id="red" bgcolor='.$color.'>'.$hr.'</td><td id="red" bgcolor='.$color.'>'.$back.'</td></tr>';
									} else {
										echo '<tr><td id="red" bgcolor='.$color.'>'.$rank.'</td><td id="red" bgcolor='.$color.'>'.$name.'</td><td id="red" bgcolor='.$color.'>'.$hr.'</td><td id="red" bgcolor='.$color.'>'.$back.'</td></tr>';
										$prev = $rank;	
									}
								}
							} else {
								if ($rank == 1) {
									echo '<tr><td bgcolor='.$color.'>'.$rank.'</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>'.$hr.'</td><td bgcolor='.$color.'>--</td></tr>';
								} else if ($back == 0){
									echo '<tr><td bgcolor='.$color.'>--</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>'.$hr.'</td><td bgcolor='.$color.'>--</td></tr>';
								} else {
									if ($hr == $prevHR) {
										echo '<tr><td bgcolor='.$color.'>--</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>'.$hr.'</td><td bgcolor='.$color.'>'.$back.'</td></tr>';
									} else {
										echo '<tr><td bgcolor='.$color.'>'.$rank.'</td><td bgcolor='.$color.'>'.$name.'</td><td bgcolor='.$color.'>'.$hr.'</td><td bgcolor='.$color.'>'.$back.'</td></tr>';
										$prev = $rank;	
									}
								}
							}
							if ($rank != 1) {
								$prevHR = $hr;
							}
							$rank++;
						}
					}
				}
			}
			
			function loadStandings() {
				global $conn;
				$sum=0;
				$sql = "select code from standings";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$sum = sum($row['code']);
					
						$sql1 = "update standings set homeRuns=".sum($row['code'])." where code='".$row['code']."'";
						$result1 = $conn->query($sql1);
					}
				
				}
			}
			
			function rabbitD() {
				global $conn;
				$id=5;
				$rabbit = array();
				$pos = 0;
				while ($id <= 8) {
					$match = 0;
					while ($match == 0) {
						$str = file_get_contents('http://espn.go.com/mlb/stats/batting/_/sort/homeRuns/order/true');
						$scan = 'http://www.espn.com/mlb/player/_';
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
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								$player = $row['player'];
								if ($player == $out) {
									$match =0;
								}
							}
						}
				
						if ($match === 1) {
							$sql = "select player from groupB";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
									if ($player == $out) {
										$match = 0;
									}
								}
							}
						}
				
						if ($match === 1) {
							$sql = "select player from groupC";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$player = $row['player'];
									if ($player == $out) {
										$match = 0;
									}
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
					$conn->query($sql);
			
					$id++;
					$rabbit[] = $out;
				}
			}
			
			function loadRabbit() {
				global $conn;	
			
				$sql = "select player, homeRuns from groupA order by homeRuns desc limit 1";
				$result = $conn->query($sql) or die("failed!" . $conn->error);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=1";
						$conn->query($sql);
					}
				}
				
				$sql = "select player, homeRuns from groupB order by homeRuns desc limit 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=2";
						$conn->query($sql);
					}
				}
				
				$sql = "select player, homeRuns from groupC order by homeRuns desc limit 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=3";
						$conn->query($sql);
					}
				}				
				
				$sql = "select player, homeRuns from groupC order by homeRuns desc limit 1 offset 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$sql = "update rabbit set player='".$row['player']."', homeRuns=".$row['homeRuns']." where id=4";
						$conn->query($sql);
					}
				}
			
				rabbitD();
			}
			
			function printRabbit($deadline) {
				global $conn;
				global $colorA, $colorB, $colorC, $colorD;
				$sql = "select id, player, homeRuns from rabbit order by homeRuns desc limit 7";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$id = $row['id'];
						$sql = "select max(id) from rabbit where homeRuns = (select min(homeRuns) from rabbit)";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row1 = $result->fetch_assoc()){
								$pid = $row1['max(id)'];
							}
						}
					}
				}	
				
				$sql = "select id, player, homeRuns, gr, color from rabbit";
				$result = $conn->query($sql);
				
				if (new DateTime() > $deadline) {
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo "<tr><td bgcolor=".$row['color']."><del>".$row['gr']."</del></td><td bgcolor=".$row['color']."><del>".$row['player']."</del></td><td bgcolor=".$row['color']."><del>".$row['homeRuns']."</del></td></tr>";
							} else {
								echo "<tr><td bgcolor=".$row['color'].">".$row['gr']."</td><td bgcolor=".$row['color'].">".$row['player']."</td><td bgcolor=".$row['color'].">".$row['homeRuns']."</td></tr>";
							}
					
						}	
					}
				} else {
					echo "<tr><td bgcolor=".$colorA.">A</td><td bgcolor=".$colorA."> ------- </td><td bgcolor=".$colorA."> -- </td></tr>";	
					echo "<tr><td bgcolor=".$colorB.">B</td><td bgcolor=".$colorB."> ------- </td><td bgcolor=".$colorB."> -- </td></tr>";	
					echo "<tr><td bgcolor=".$colorC.">C</td><td bgcolor=".$colorC."> ------- </td><td bgcolor=".$colorC."> -- </td></tr>";
					echo "<tr><td bgcolor=".$colorC.">C</td><td bgcolor=".$colorC."> ------- </td><td bgcolor=".$colorC."> -- </td></tr>";	
					echo "<tr><td bgcolor=".$colorD.">D</td><td bgcolor=".$colorD."> ------- </td><td bgcolor=".$colorD."> -- </td></tr>";
					echo "<tr><td bgcolor=".$colorD.">D</td><td bgcolor=".$colorD."> ------- </td><td bgcolor=".$colorD."> -- </td></tr>";
					echo "<tr><td bgcolor=".$colorD.">D</td><td bgcolor=".$colorD."> ------- </td><td bgcolor=".$colorD."> -- </td></tr>";
					echo "<tr><td bgcolor=".$colorD.">D</td><td bgcolor=".$colorD."> ------- </td><td bgcolor=".$colorD."> -- </td></tr>";
				}

				if (new DateTime() > $deadline) {
					$total=sum('rabbit');
					echo "<tr><td></td><td id='dark'>Total</td><td id='dark'><b>".$total."</b></td></tr>";
				} else {
					echo "<tr><td></td><td id='dark'>Total</td><td id='dark'><b>0</b></td></tr>";
				}
			}	
			
			function HRTodayA() {
				global $conn;
				
				for ($i = 1; $i <= 7; $i++) {
					$zero = 0;
					$sql = "select player, link from groupA where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
							$player = $row['player'];
						}
					}

					/*$j = 0;
					while (substr($link, $j, 6) !== "/stats") {
						$j++;
					}
					$link = substr($link, 0, $j) . substr($link, $j+6);*/
				
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
					} else {
						$hr=0;
					}
					
					if ($hr > 0) {
						$match = 0;
						$sql = "select player from today";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								if ($row['player'] == $player) {
									$match = 1;
								}
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$player."'";
						} else {
							$sql = "insert into today (player, HR) values ('".$player."', ".$hr.")";
						}
						
						echo $sql."<br>";
						$conn->query($sql);			
					}
				}
			}
			
			function HRTodayB() {
				global $conn;
				
				for ($i = 1; $i <= 11; $i++) {
					$zero = 0;
					$sql = "select player, link from groupB where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
							$player = $row['player'];
						}
					}		
				
					/*$j = 0;
					while (substr($link, $j, 6) !== "/stats") {
						$j++;
					}
					$link = substr($link, 0, $j) . substr($link, $j+6);*/
				
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
					} else {
						$hr=0;
					}
					
					if ($hr > 0) {
						$match = 0;
						$sql = "select player from today";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								if ($row['player'] == $player) {
									$match = 1;
								}
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$player."'";
						} else {
							$sql = "insert into today (player, HR) values ('".$player."', ".$hr.")";
						}
						
						echo $sql."<br>";
						$conn->query($sql);			
					}
				}
			}
			
			function HRTodayC() {
				global $conn;
				
				for ($i = 1; $i <= 15; $i++) {
					$zero = 0;
					$sql = "select player, link from groupC where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
							$player = $row['player'];
						}
					}		
				
					/*$j = 0;
					while (substr($link, $j, 6) !== "/stats") {
						$j++;
					}
					$link = substr($link, 0, $j) . substr($link, $j+6);*/
				
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
					} else {
						$hr=0;
					}
					
					if ($hr > 0) {
						$match = 0;
						$sql = "select player from today";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								if ($row['player'] == $player) {
									$match = 1;
								}
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$player."'";
						} else {
							$sql = "insert into today (player, HR) values ('".$player."', ".$hr.")";
						}
						
						echo $sql."<br>";
						$conn->query($sql);			
					}
				}
			}
			
			function HRTodayD() {
				global $conn;
				
				$sql = "select max(id) from groupD";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$max = $row['max(id)'];
					}
				}
				for ($i = 1; $i <=$max; $i++) {
					$zero = 0;
					$sql = "select firstName, lastName, link from groupD where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$link = $row['link'];
							$player = $row['firstName'] . " " . $row['lastName'];
						}
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
					} else {
						$hr=0;
					}
					
					if ($hr > 0) {
						$match = 0;
						$sql = "select player from today";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								if ($row['player'] == $player) {
									$match = 1;
								}
							}
						}
						if ($match == 1) {
							$sql = "update today set HR=".$hr." where player = '".$player."'";
						} else {
							$sql = "insert into today (player, HR) values ('".$player."', ".$hr.")";
						}
						
						echo $sql."<br>";
						$conn->query($sql);			
					}
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
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid querydel: ' . mysqli_error());
				}
				
				$sql="update groupA set inning=''";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid querydel: ' . mysqli_error());
				}
				
				$sql="update groupB set inning=''";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid querydel: ' . mysqli_error());
				}
				
				$sql="update groupC set inning=''";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid querydel: ' . mysqli_error());
				}
				
				$sql="update groupD set inning=''";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid querydel: ' . mysqli_error());
				}
				
				$sql = "select player, link from groupA";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid queryA: ' . mysqli_error());
				}
				
				while($row = mysqli_fetch_assoc($result)){
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
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid queryB: ' . mysqli_error());
				}
				
				while($row = mysqli_fetch_assoc($result)){
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
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid queryC: ' . mysqli_error());
				}
				
				while($row = mysqli_fetch_assoc($result)){
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
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Invalid queryD: ' . mysqli_error());
				}
				
				while($row = mysqli_fetch_assoc($result)){
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
					$result = mysqli_query($conn, $sql);
					if (!$result) {
						die('Invalid query1: ' . mysqli_error());
					}
					if ($i < $a) {
					//echo $inning[$i];
					//echo $play[$i]."<br>";
					$sql = "update groupA set inning='".$inning[$i]."' where player='".$play[$i]."'";
					$result = mysqli_query($conn, $sql);
					if (!$result) {
						die('Invalid queryA1: ' . mysqli_error());
					}
					}
				
					if ($i >= $a && $i < ($a+$b)) {
					//echo $inning[$i];
					//echo $play[$i]."<br>";
					$sql = "update groupB set inning='".$inning[$i]."' where player='".$play[$i]."'";
					$result = mysqli_query($conn, $sql);
					if (!$result) {
						die('Invalid queryB1: ' . mysqli_error());
					}
					}
				
				if ($i >= ($a+$b) && $i < ($a+$b+$c)) {
					//echo $inning[$i];
					//echo $play[$i]."<br>";
					$sql = "update groupC set inning='".$inning[$i]."' where player='".$play[$i]."'";
					$result = mysqli_query($conn, $sql);
					if (!$result) {
						die('Invalid queryC1: ' . mysqli_error());
					}
				}
				
				if ($i >= ($a+$b+$c)) {
					//echo $inning[$i];
					//echo $play[$i];
					//echo $i-($a+$b+$c);
					//echo $D[$i-($a+$b+$c)]."<br>";
					$sql = "update groupD set inning='".$inning[$i]."' where lastName='".$D[$i-($a+$b+$c)]."'";
					$result = mysqli_query($conn, $sql);
					if (!$result) {
						die('Invalid queryD1: ' . mysqli_error());
					}
				}
				}
			}

				function unionKey() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}	
		$total = "";
		for ($i=1; $i <= $max; $i++) {	
			$sql = "select code from standings where id = ". $i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					if ($i < $max) {
						$total .= "select player from ";
						$total .= $row['code'];
						$total .= " union all ";
					} else {
						$total .= "select player from ";
						$total .= $row['code'];
					}
				}
			}	
		}
		return $total;
	}

	function picksA() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupA";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select player from groupA where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['player'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "';";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round(($count/$maxGroups)*100, 1);

			$sql = "update groupA set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}

	function picksB() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupB";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select player from groupB where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['player'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "'";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round(($count/$maxGroups)*100, 1);

			$sql = "update groupB set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}

	function picksC() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select player from groupC where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['player'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "'";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round((($count/$maxGroups)*100), 1);

			$sql = "update groupC set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}

	function picksD() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupD";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select firstName, lastName from groupD where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['firstName'] . " " . $row['lastName'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "'";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round((($count/$maxGroups)*100), 1);

			$sql = "update groupD set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}
		?>