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
		
			include "../update.php";
			
			$deadline = new DateTime("2017-04-03 13:05:00");
		?>						
				
				<table>
					<tr>
						<td>
						<?php
							if (new DateTime() > $deadline) {
				echo '<a class="twitter-timeline" width="250" height="490" href="https://twitter.com/MLBHR" data-widget-id="723360908542496770">Tweets by @MLBHR</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
							}
							else {
								echo '<input name="password" type="password" placeholder="Password" onkeyup="showUser(this.value)"/>';
								echo '<div id="txtHint"></div>';
							}
						?>
						</td>
						<td>
							<table bgcolor=black align=center>
								<thead>
									<tr>
										<td colspan="4" id="dark">Groups<br>Live Totals</td>
									</tr>
									<tr>
										<th bgcolor=#ffd700>A</th><th bgcolor=silver>B</th><th bgcolor=#cd7f32>C</th><th bgcolor=#a4c639>D</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td bgcolor=#ffd700>
											<table bgcolor=#ffd700>
												<thead>
													<tr>
														<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>
													</tr>
												</thead>
												<tbody id = "A">
													<?php
														$sql = "select player, team, homeRuns, inning, link from groupA";
														$result = mysql_query($sql);
														if (!$result) {
															die('Invalid query: ' . mysql_error());
														}
				
														while($row = mysql_fetch_assoc($result)){
															echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
														}
													?>
												</tbody>
											</table>
										</td>
										<td bgcolor=silver>
											<table bgcolor=silver>
												<thead>
													<tr>
														<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>
													</tr>
												</thead>
												<tbody  id="B">
													<?php
														$sql = "select player, team, homeRuns, inning, link from groupB";
														$result = mysql_query($sql);
														if (!$result) {
															die('Invalid query: ' . mysql_error());
														}
				
														while($row = mysql_fetch_assoc($result)){
															echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
														}
													?>
												</tbody>
											</table>
										</td>
										<td bgcolor=#cd7f32>
											<table bgcolor=#cd7f32>
												<thead>
													<tr>
														<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>
													</tr>
												</thead>
												<tbody  id="C">
													<?php
															$sql = "select player, team, homeRuns, inning, link from groupC";
														$result = mysql_query($sql);
														if (!$result) {
															die('Invalid query: ' . mysql_error());
														}
				
														while($row = mysql_fetch_assoc($result)){
															echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['player']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
														}
													?>
												</tbody>
											</table>
										</td>
										<td bgcolor=#a4c639>
											<table bgcolor=#a4c639>
												<tr>
													<td>
														<table>
															<thead>
																<tr>
																	<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>
																</tr>
															</thead>
															<tbody  id="D1">
																<?php
																	$sql = "select firstName, lastName, team, homeRuns, inning, link from groupD order by lastName limit 15";
																	$result = mysql_query($sql);
																	if (!$result) {
																		die('Invalid query: ' . mysql_error());
																	}
				
																	while($row = mysql_fetch_assoc($result)){
																		echo "<tr><td><a href='".$row['link']."' style='color:black' target='_blank'>".$row['firstName']." ".$row['lastName']." (".$row['team'].")</a></td><td>".$row['homeRuns']."</td></tr>";
																	}
																?>
															</tbody>
														</table>
													</td>
													<td>
														<table>
															<thead>
																<tr>
																	<th width="225">Player</th><!--<th>Inning</th>--><th>HR</th>
																</tr>
															</thead>
															<tbody  id="D2">
																<?php
																	$sql = "select firstName, lastName, team, homeRuns, inning, link from groupD order by lastName limit 15 offset 15";
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
																?>
															</tbody>
														</table>
													</td>
												</tr>
												<tr><td colspan="2">ALL PLAYERS NOT IN GROUPS A-C</td></tr>
											</table>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="4" bgcolor=black id="dark">Choose 1 from A, 1 from B, 2 from C, and 4 from D<br>
											Top 7 totals count, lowest is dropped</td>							
									</tr>
								</tfoot>
							</table>
						</td>
					</tr>	
					<tr>
						<td>
							<table>
								<tbody>
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
									<tr><td></td></tr>
									<!--<tr><td> "Best possible picks" being fixed</td></tr>-->
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
								</tbody>
							</table>
						</td>
					
						<td>
							<!--<b><i>* = needs to pay</i></b>-->
							
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
													<tr><th>Ferg</th></tr>
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
													<tr><th>Grupski</th></tr>
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
													<tr><th>Mistron</th></tr>
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
													<tr><th>Davevonte</th></tr>
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
													<tr><th>Vinny S</th></tr>
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
													<tr><th>Parchinsky</th></tr>
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
													<tr><th>Scott</th></tr>
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
													<tr><th>Kev</th></tr>
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
													<tr><th>Tom</th></tr>
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
													<tr><th>Ant</th></tr>
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
													<tr><th>Julia</th></tr>
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
													<tr><th>Nestor</th></tr>
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
													<tr><th>Ariel</th></tr>
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
													<tr><th>Lively</th></tr>
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
													<tr><th>Rebekah</th></tr>
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
													<tr><th>*Zo</th></tr>
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
																			printGroup('zo');
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
											<table border = 6px bgcolor=#414141>
												<thead id="yellow">
													<tr><th>*Mark</th></tr>
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
																			printGroup('mark');
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
													<tr><th>Zippy</th></tr>
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
													<tr><th>Pedowitz</th></tr>
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