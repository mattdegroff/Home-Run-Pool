<?php
	function printGroup1($table) {
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
				for ($i=1; $i <=4; $i++) {
					$sql = "select id, player, homeRuns from ".$table." where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo "<p width=150px><del>".$row['player']."</del> - <del>".$row['homeRuns']."</del></p>";
							} else {
								echo "<p width=150px>".$row['player']." - ".$row['homeRuns']."</p>";
							}
						}
					}	
					
				}
			}
			
			function printGroup2($table) {
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
				for ($i=5; $i <=8; $i++) {
					$sql = "select id, player, homeRuns from ".$table." where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo "<p width=150px><del>".$row['player']."</del> - <del>".$row['homeRuns']."</del></p>";
							} else {
								echo "<p width=150px>".$row['player']." - ".$row['homeRuns']."</p>";
							}
						}
					}	
					
				}
			}
			
			function standings1($deadline) {
				global $conn;
				if (new DateTime() < $deadline) {
					$sql = "select color, name, font from standings order by name";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$name = $row['name'];
							$color = $row['color'];
							$font = $row['font'];
					
							$sql = "select max(id) from standings";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()){
									$maxId = $row['max(id)'];
								}
							}
							
							for ($i =1; $i <= $maxId; $i++) {
								$sql = "select color, name, font, code, paid from standings where id=".$i;
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()){
										$color = $row['color'];
										$name = $row['name'];
										$font = $row['font'];
										$code = $row['code'];
										$paid = $row['paid'];
									}
								}
								

								
								if ($font == 1) {
									echo "<div id='dark' style='margin: auto;' class='well-sm' style='background: ". $color. ";'>";
								} else if ($font == 2) {
									echo "<div id='yellow' style='margin: auto;' class='well-sm' style='background: ". $color. ";'>";
								} else {
									echo "<div style='margin: auto;' class='well-sm' style='background: ". $color. ";'>";
								}
								
								echo '<div class="container-fluid"><div class="row">';
								echo '<div class="col-sm-3">';
								if ($paid == 1) {
									echo "<h1>". $name . "</h1>";
								} else {
									echo "<h1>*". $name . "*</h1>";
								}
								echo '</div>';
								echo '<div class="col-sm-2">';
								printGroup1($code);
								echo '</div>';
								echo '<div class="col-sm-2">';
								printGroup2($code);
								echo '</div>';
								echo '<div class="col-sm-3">';
								echo "<h1>Total</h1>";
								echo "<h1>".sum($code)."</h1>";
								echo '</div>';
								echo '</div></div></div>';
						}
					}
				}
				} else {
					$rank = 1;		
					$most = 0;
					$back = 0;
					
					$sql = "select  name, color, homeRuns, font, code, paid from standings order by homeRuns desc, name";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$name = $row['name'];
							$color = $row['color'];
							$hr = $row['homeRuns'];
							$font = $row['font'];
							$code = $row['code'];
							$paid = $row['paid'];
					
							if ($rank == 1) {
								$most = $hr;
							} else {
								$back = $hr - $most;
							}
										echo '<div class="panel">  <!-- accordion '.$rank.' -->';
										if ($font == 1) {
											echo '<div class="panel-heading" style="background: '.$color.'; color: white;"> <!-- panel heading -->';
										} else if ($font == 2) {
											echo '<div class="panel-heading" style="background: '.$color.'; color: yellow;"> <!-- panel heading -->';
										} else {
											echo '<div class="panel-heading" style="background: '.$color.';"> <!-- panel heading -->';
										}
											echo '<h4 class="panel-title"> <!-- title '.$rank.' -->';
												echo '<a data-toggle="collapse" data-parent="#accordion" href="#accordion'.$rank.'">';
													if ($back == 0) {
														echo '<b>' . $name . ' - ' . sum($code) . '</b>';
													} else {
														echo '<b>' . $name . ' - ' . sum($code) . '</b>';
													}
												echo '</a>';
											echo '</h4>';
										echo '</div>';
										echo '<!-- panel body -->';
										echo '<div id="accordion'.$rank.'" class="panel-collapse collapse">';
											echo '<div class="panel-body" style="background: '.$color.';">';
													if ($font == 1) {
									echo "<div id='dark' class='well-sm' style='background: ". $color. ";'>";
								} else if ($font == 2) {
									echo "<div id='yellow' class='well-sm' style='background: ". $color. ";'>";
								} else {
									echo "<div class='well-sm' style='background: ". $color. ";'>";
								}
													echo '<div class="container-fluid">';
													echo '<div class="row">';
													echo '<div class="col-sm-12 vcenter">';
													if ($paid == 1) {
														echo "<h1>". $name . "</h1>";
													} else {
														echo "<h1>*". $name . "*</h1>";
													}
													echo '</div>';
													echo '</div>';
													echo '<div class="row">';
													echo '<div class="col-sm-6 vcenter">';
													printGroup1($code);
													echo '</div>';
													echo '<div class="col-sm-6 vcenter">';
													printGroup2($code);
													echo '</div>';
													echo '</div>';
													echo '<div class="row">';
													echo '<div class="col-sm-6 vcenter">';
													echo "<h1><u>Total</u></h1>";
													echo "<h1>".sum($code)."</h1>";
													echo '</div>';
													echo '<div class="col-sm-6 vcenter">';
													if ($back == 0) {
														echo "<h1><u>HR Back</u></h1><h1>--</h1>";
													} else {
														echo "<h1><u>HR Back</u></h1><h1>".$back."</h1>";
													}
													echo '</div>';
													echo '</div></div></div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
									
							$rank++;
							}
						}
					}
				}
				
				function printRabbit1($deadline) {
				global $conn;
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
					
				for ($i=1; $i <=4; $i++) {
					$sql = "select id, player, homeRuns, gr, color from rabbit where id=".$i;
					$result = $conn->query($sql);
					
				if (new DateTime() > $deadline) {
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo "<p width=150px bgcolor=".$row['color'].">". $row['gr']. " <del>".$row['player']."</del> - <del>".$row['homeRuns']."</del></p>";
							} else {
								echo "<p width=150px bgcolor=".$row['color'].">". $row['gr']. " ".$row['player']." - ".$row['homeRuns']."</p>";
							}
						}
					}
				} else {
					echo "<tr><td bgcolor=#d10000>A</td><td bgcolor=#d10000> ------- </td><td bgcolor=#d10000> -- </td></tr>";	
					echo "<tr><td bgcolor=#ff7171>B</td><td bgcolor=#ff7171> ------- </td><td bgcolor=#ff7171> -- </td></tr>";	
					echo "<tr><td bgcolor=#ffafaf>C</td><td bgcolor=#ffafaf> ------- </td><td bgcolor=#ffafaf> -- </td></tr>";
					echo "<tr><td bgcolor=#ffafaf>C</td><td bgcolor=#ffafaf> ------- </td><td bgcolor=#ffafaf> -- </td></tr>";	
				}	
					
				}
				
			}
			
			function printRabbit2($deadline) {
				global $conn;
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
					
				for ($i=5; $i <=8; $i++) {
					$sql = "select id, player, homeRuns, gr, color from rabbit where id=".$i;
					$result = $conn->query($sql);
					
				if (new DateTime() > $deadline) {
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo "<p width=150px bgcolor=".$row['color'].">". $row['gr']. " <del>".$row['player']."</del> - <del>".$row['homeRuns']."</del></p>";
							} else {
								echo "<p width=150px bgcolor=".$row['color'].">". $row['gr']. " ".$row['player']." - ".$row['homeRuns']."</p>";
							}
						}
					}
				} else {
					echo "<tr><td bgcolor=white>D</td><td bgcolor=white> ------- </td><td bgcolor=white> -- </td></tr>";
					echo "<tr><td bgcolor=white>D</td><td bgcolor=white> ------- </td><td bgcolor=white> -- </td></tr>";
					echo "<tr><td bgcolor=white>D</td><td bgcolor=white> ------- </td><td bgcolor=white> -- </td></tr>";
					echo "<tr><td bgcolor=white>D</td><td bgcolor=white> ------- </td><td bgcolor=white> -- </td></tr>";
				}
				}
			}
?>