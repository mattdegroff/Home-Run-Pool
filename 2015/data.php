	<?php	
		include_once("connect.php");
		include "update.php";
			
		$deadline = new DateTime("2015-04-05 13:10:00");
		$groupDead = new DateTime("2015-02-24 12:00:00");
		$final = new DateTime("2015-10-03 23:59:59");
	?>						
	<style>
		.color {
			<?php
			$sql = "select font from standings order by homeRuns desc, name limit 1";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										if ($row['font'] == 1) {
											echo "color: white;";
										}
										else if ($row['font'] == 2) {
											echo "color: yellow;";
										}
										else {
											echo "color: black;";
										}
									}
								}
								?>
			margin: auto;
		}
	</style>
	<table>
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<?php
								if (new DateTime() > $deadline && new DateTime() < $final) {
									echo '<table class="color"><tr><th><u>Home Runs Hit Today</u></th></tr>';
									$sql = "select player, HR from today";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()){
											echo "<tr><td>".$row['player']." - ".$row['HR']."</td></tr>";
										}
									}
									echo "</table>";
								} /*else {
									//echo '<input name="password" type="password" placeholder="Password" onkeyup="showUser(this.value)"/>';
									//echo '<div id="txtHint"></div>';
								}*/
							?>
						</td>
					</tr>
					<tr>
						<td>
							<table bgcolor=black align=center width="210">
								<thead>
									<tr>
										<td colspan="4" id="dark">Standings</td>
									</tr>
									<tr>
										<th id="dark">#</th><th id="dark">Name</th><th id="dark">HR</th><th id="dark">HRB</th>
									</tr>
								</thead>
								<tbody>
									<?php standings($deadline); ?>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td style="margin:auto">
							<table bgcolor=black align=center width="210">
								<thead>
									<tr>
										<td colspan="3" id="dark">GOAT Squad</td>
									</tr>
									<tr id="dark">
										<th>Group</th><th>Player</th><th>HR</th>
									</tr>
								</thead>
								<tbody>
									<?php
										printRabbit($groupDead);			
									?>
								</tbody>
							</table>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td>
							<table bgcolor=black align=center>
								<thead>
									<tr>
										<td colspan="4" id="dark">Groups<br>Final Totals</td>
									</tr>
									<tr>
										<th bgcolor=red>A</th><th bgcolor=#1e90ff>B</th><th bgcolor=yellow>C</th><th bgcolor=#20ff00>D</th>
									</tr>
								</thead>
								<tbody>
									<tr>	
											<?php
												if (new DateTime() > $groupDead) {													
													echo "<td bgcolor=red>";
													echo "<table bgcolor=red><thead><tr>";
													echo '<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>';
													echo '</tr></thead><tbody id="A">';
													$sql = "select player, team, homeRuns, link from groupA order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
														}
													}
													echo "</tbody></table></td>";
													
													echo "<td bgcolor=#1e90ff>";
													echo "<table bgcolor=#1e90ff><thead><tr>";
													echo '<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>';
													echo '</tr></thead><tbody id="B">';
													$sql = "select player, team, homeRuns, link from groupB order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
														}
													}
													echo "</tbody></table></td>";
													
													echo "<td bgcolor=yellow>";
													echo "<table bgcolor=yellow><thead><tr>";
													echo '<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>';
													echo '</tr></thead><tbody id="C">';
													$sql = "select player, team, homeRuns, link from groupC order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
														}
													}
													echo "</tbody></table></td>";													
												} else {
													echo '<td align="center" style="width: 300; vertical-align: middle; font-size: 40" bgcolor=#d10000>GROUPS</td>';	
													echo '<td align="center" style="width: 300; vertical-align: middle; font-size: 40" bgcolor=#ff7171>WILL<br>BE<br>RELEASED</td>';											
													echo '<td align="center" style="width: 300; vertical-align: middle; font-size: 40" bgcolor=#ffafaf>AT<br>NOON</td>';
												}
											?>
										<td bgcolor=#20ff00>
											<table bgcolor=#20ff00>
												<tr>
													<td>
														<table>
															<thead>
																<tr>
																	<?php
																		if (new DateTime() > $deadline) {
																			echo '<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>';
																		}
																		
																		$sql = "select max(id) from groupD";
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) {
																		while($row = $result->fetch_assoc()){
																			$max = $row['max(id)'];
																		}
																	}
																	$half = ceil($max/2);
																	?>
																</tr>
															</thead>
															<tbody id="D1">
																<?php
																if (new DateTime() > $deadline) {
																	$sql = "select firstName, lastName, team, homeRuns, inning, link from groupD order by lastName limit ".$half;
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) {
																		while($row = $result->fetch_assoc()){
																			if ($row['lastName'] == 'DeGroff') {
																				echo "<tr><td style='color: #DD0000'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</td><td style='color: #DD0000'>".$row['homeRuns']."</td></tr>";
																			}
																			else {
																				echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
																			}
																		}
																	}
																}
																?>
															</tbody>
														</table>
													</td>
													<td>
														<table>
															<thead>
																<tr>
																	<?php
																		if (new DateTime() > $deadline) {
																			echo '<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>';
																		}
																	?>
																</tr>
															</thead>
															<tbody  id="D2">
																<?php
																if (new DateTime() > $deadline) {
																	$sql = "select firstName, lastName, team, homeRuns, inning, link from groupD order by lastName limit ".$half." offset ".$half;
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) {
																		while($row = $result->fetch_assoc()){
																			if ($row['lastName'] == 'DeGroff') {
																				echo "<tr><td style='color: #DD0000'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</td><td style='color: #DD0000'>".$row['homeRuns']."</td></tr>";
																			}
																			else {
																				echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
																			}
																		}
																	}
																}
																?>
															</tbody>
														</table>
													</td>
												</tr>
													<?php
														if (new DateTime() > $groupDead) {
															if (new DateTime() > $deadline) {
																echo '<tr><td colspan="2">ALL PLAYERS NOT IN GROUPS A-C</td></tr>';
															} else {
																echo '<tr><td align="center" style="width: 300; vertical-align: middle; font-size: 35" colspan="2">ALL<br>PLAYERS<br>NOT<br>IN<br>GROUPS<br>A-C<br></td></tr>';
															}
														}
													?>
											</table>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<?php
											if (new DateTime() > $groupDead) {
												echo '<td colspan="4" bgcolor=black id="dark">Choose 1 from A, 1 from B, 2 from C, and 4 from D<br>
												Top 7 totals count, lowest is dropped</td>';
											}
										?>
									</tr>
								</tfoot>
							</table>
						</td>
					</tr>	
					<tr>					
						<td>
							<table align=center>
								<tbody>
										<?php 
											echo "<tr>";
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
												
												echo "<td><table border = 6px bgcolor=".$color.">";
												if ($font == 1) {
													echo '<thead id="dark">';
												} else if ($font == 2) {
													echo '<thead id="yellow">';
												} else {
													echo "<thead>";
												}
												if (new DateTime() > $deadline) {
													if ($paid == 1) {
														echo "<tr><th>".$name."</th></tr></thead>";
													} else {
														echo "<tr><th>*".$name."</th></tr></thead>";
													}	
												} else {
													if ($paid == 1) {
														echo "<tr><th width='250'>".$name."</th></tr></thead>";
													} else {
														echo "<tr><th width='250'>*".$name."</th></tr></thead>";
													}	
												}
												if ($font == 1) {
													if (new DateTime() > $deadline) {
														echo '<tbody><tr><td><table id="dark"><thead><tr>
													<th width="150">Player</th><th>HR</th>
													</tr></thead><tbody>';
													}
												} else if ($font == 2) {
													if (new DateTime() > $deadline) {
														echo '<tbody><tr><td><table id="yellow"><thead><tr>
													<th width="150">Player</th><th>HR</th>
													</tr></thead><tbody>';
													}
												} else {
													if (new DateTime() > $deadline) {
														echo '<tbody><tr><td><table><thead><tr>
													<th width="150">Player</th><th>HR</th>
													</tr></thead><tbody>';
													}
												}
												if (new DateTime() > $deadline) {
													printGroup($code);
													echo "</tbody></table></td></tr></tbody></table></td>";
												} else {
													echo "</tbody></table></td>";
												}
												if (new DateTime() > $deadline) {
													if ($i % 5 == 0) {
														if ($i == $maxId) {
															echo "</tr>";
														} else {
															echo "</tr><tr>";
														}
													} else {
														if ($i == $maxId) {
															echo "</tr>";
														}
													}	
												} else {
													if ($i % 3 == 0) {
														if ($i == $maxId) {
															echo "</tr>";
														} else {
															echo "</tr><tr>";
														}
													} else {
														if ($i == $maxId) {
															echo "</tr>";
														}
													}
												}	
											}
										?>
								</tbody>
							</table>
						</td>					
					</tr>
				</table>