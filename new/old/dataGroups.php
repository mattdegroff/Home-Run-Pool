	<?php	
		include_once("connect.php");
		include "update.php";
			
		$deadline = new DateTime("2017-01-02 13:10:00");
		$groupDead = new DateTime("2017-01-01 12:00:00");
	?>						
	
	<table>
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<?php
								if (new DateTime() > $deadline) {
									echo '<h3><u>Home Runs Hit Today</u></h3>';
									$sql = "select player, HR from today";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()){
											echo $row['player']." - ".$row['HR']."<br>";
										}
									}
								} else {
									echo '<input name="password" type="password" placeholder="Password" onkeyup="showUser(this.value)"/>';
									echo '<div id="txtHint"></div>';
								}
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
										printRabbit($deadline);			
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
										<td colspan="4" id="dark">Groups<?php if (new DateTime() > $groupDead && new DateTime() < $deadline) { echo "<br>2016 Totals"; } if (new DateTime() > $deadline) { echo "<br>Live Totals"; } ?></td>
									</tr>
									<tr>
										<th bgcolor=#d10000>A</th><th bgcolor=#ff7171>B</th><th bgcolor=#ffafaf>C</th><th bgcolor=white>D</th>
									</tr>
								</thead>
								<tbody>
									<tr>	
											<?php
												if (new DateTime() > $groupDead) {													
													echo "<td bgcolor=#d10000>";
													echo "<table bgcolor=#d10000><thead><tr>";
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
													
													echo "<td bgcolor=#ff7171>";
													echo "<table bgcolor=#ff7171><thead><tr>";
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
													
													echo "<td bgcolor=#ffafaf>";
													echo "<table bgcolor=#ffafaf><thead><tr>";
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
													echo '<td align="center" style="width: 300; vertical-align: middle; font-size: 40" bgcolor=#ffafaf>MARCH<br>1,<br>2017</td>';
												}
											?>
										<td bgcolor=white>
											<table bgcolor=white>
												<tr>
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
															<tbody id="D1">
																<?php
																	$sql = "select firstName, lastName, team, homeRuns, inning, link from groupD order by lastName limit 15";
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
																	$sql = "select firstName, lastName, team, homeRuns, inning, link from groupD order by lastName limit 15 offset 15";
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
									<tr>
										<td>
											<table border = 6px bgcolor=red>
												<thead>
													<tr><th>Vinny C</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('vinnyC');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=purple>
												<thead id="dark">
													<tr><th>DeGroff</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table id="dark">
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('matt');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=silver>
												<thead>
													<tr><th>*Ferg</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('ferg');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#85bb65>
												<thead>
													<tr><th>*Grupski</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('grup');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#228b22>
												<thead>
													<tr><th>*Mistron</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('mistron');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=black>
												<thead id="dark">
													<tr><th>*Davevonte</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table id="dark">
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('davevonte');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<table border = 6px bgcolor=navy>
												<thead id="dark">
													<tr><th>*Vinny S</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table id="dark">
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('vinnyS');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=orange>
												<thead>
													<tr><th>*Parchinsky</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('par');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#1e90ff>
												<thead>
													<tr><th>*Scott</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('scott');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=yellow>
												<thead>
													<tr><th>*Kevin</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('kev');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=blue>
												<thead id="yellow">
													<tr><th>*Tom</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table id="yellow">
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('tom');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#add8e6>
												<thead>
													<tr><th>*Ant</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('ant');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<table border = 6px bgcolor=#ffe4b3>
												<thead>
													<tr><th>*Julia</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('julia');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=white>
												<thead>
													<tr><th>*Nestor</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('nestor');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#8b4513>
												<thead id="dark">
													<tr><th>*Ariel</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table id="dark">
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('ariel');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#90ee90>
												<thead>
													<tr><th>*Lively</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('lively');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#ffa2d0>
												<thead>
													<tr><th>*Rebekah</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('rebekah');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=maroon>
												<thead id="dark">
													<tr><th>*Menke</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table id="dark">
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('menke');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<table border = 6px bgcolor=#b299e5>
												<thead>
													<tr><th>*Kyle</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('kyle');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#20ff00>
												<thead>
													<tr><th>*Steve</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('steve');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#00ffdc>
												<thead>
													<tr><th>*Zippy</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('zippy');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<table border = 6px bgcolor=#ecd540>
												<thead>
													<tr><th>*Pedowitz</th></tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<table>
																<thead>
																	<tr>
																		<th width="150">Player</th><th>HR</th>
																	</tr>
																</thead>
																<tbody>
																	<?php						
																		if (new DateTime() > $deadline) {
																			printGroup('pedowitz');
																		}
																	?>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</td>					
					</tr>
				</table>