<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="card cardStandings">
						<div class="card-header text-center">
							<h5>Standings</h5>
						</div>
						<div class="card-body text-center">
							<div class="container-fluid cardStandings">
								<div class="row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">#</div>
									<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">Name</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">HR</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">HRB</div>
								</div>
								<?php standings($deadline); ?>
							</div>
						</div>
					</div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-4">
				<!--<div class="card-group" style="background-color: #eeeeee;">
					<div class="card-body text-center">-->
						<!--<div class="card-group">-->
							<div class="card" >
							<div class="card-header text-center">
								<h5>Groups</h5>
								<ul class="nav nav-pills card-header-pills nav-fill">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="pill" href=<?php echo "#A".$_SESSION['year']?>>A</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href=<?php echo "#B".$_SESSION['year']?>>B</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href=<?php echo "#C".$_SESSION['year']?>>C</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href=<?php echo "#D".$_SESSION['year']?>>D</a>
									</li>
								</ul>
							</div>
							<div class="card-block cardGroups">
								<div class="tab-content">
								<div class="tab-pane active fade show" id=<?php echo "A".$_SESSION['year']?> style=<?php echo '"background-color: ' . $colorA . '"'; ?>>
									<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Apic().' alt="Card image">'; }?>
										<div class="card-body">
											<!--<h4 class="card-title text-center">A</h4>-->
											<div class="card-text cardscroll groupScroll">
												<div class="container-fluid">
													<div class="row">
														<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
														<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
													</div>
												<?php
													if (new DateTime() > $groupDead) {
														$sql = "SELECT player FROM groupa ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['player'];
																	}
																}

															$sql = "select player, team, homeRuns, link from groupa order by id";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()){
																if ($row['player'] == $player && new DateTime() > $deadline) {
																	echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
																			<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																			.' ('.$row['team'].')</a>
																			</div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																	} else {
																echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																			<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																			.' ('.$row['team'].')</a>
																			</div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																	}
															}
														}
													}
												?>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id=<?php echo "B".$_SESSION['year']?> style=<?php echo '"background-color: ' . $colorB . '"'; ?>>
									<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Bpic().' alt="Card image">'; }?>
										<div class="card-body">
										<!--<h4 class="card-title text-center">B</h4>-->
										<div class="card-text cardscroll groupScroll">
											<div class="container-fluid">
												<div class="row">
													<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
													<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
												</div>
											<?php
												if (new DateTime() > $groupDead) {
													$sql = "SELECT player FROM groupb ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['player'];
																	}
																}

														$sql = "select player, team, homeRuns, link from groupb order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															if ($row['player'] == $player && new DateTime() > $deadline) {
																echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																} else {
															echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																}
														}
													}
												}
											?>
										</div>
									</div>
								</div>
								</div>
								<div class="tab-pane fade" id=<?php echo "C".$_SESSION['year']?> style=<?php echo '"background-color: ' . $colorC . '"'; ?>>
								<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Cpic().' alt="Card image">'; }?>
										<div class="card-body">
										<!--<h4 class="card-title text-center">C</h4>-->
										<div class="card-text cardscroll groupScroll">
											<div class="container-fluid">
												<div class="row">
													<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
													<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
												</div>
											<?php
												if (new DateTime() > $groupDead) {
													$sql = "SELECT player, homeRuns FROM groupc ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['player'];
																	}
																}
														$sql = "select player, team, homeRuns, link from groupc order by id";
													$result = $conn->query($sql);
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()){
															if ($row['player'] == $player && new DateTime() > $deadline) {
																echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																} else {
															echo '<div class="row">
																		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																		<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['player']
																		.' ('.$row['team'].')</a>
																		</div>
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																}
														}
													}
												}
											?>
										</div>
									</div>
								</div>
								</div>
								<div class="tab-pane fade" id=<?php echo "D".$_SESSION['year']?> style=<?php echo '"background-color: ' . $colorD . '"'; ?>>
									<?php if (new DateTime() > $deadline) { echo '<img class="card-img-top img-fluid" src='.Dpic().' alt="Card image">'; }?>
									<div class="card-body">
										<!--<h4 class="card-title text-center">D</h4>-->
										<div class="card-text cardscroll groupScroll">
											<div class="container-fluid">
												<div class="row">
													<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center"><b>Player</b></div>
													<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"><b>HR</b></div>
												</div>
											<?php
												if (new DateTime() > $groupDead) {

													if (new DateTime() > $deadline) {
														$player = '';
														$sql = "select firstName, lastName FROM groupd ORDER BY homeRuns DESC LIMIT 1";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()){
																		$player = $row['firstName']." ".$row['lastName'];
																	}
																}

														$sql = "select firstName, lastName, team, homeRuns, link from groupd order by lastName";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()){
																$play = $row['firstName']." ".$row['lastName'];
																if ($play == $player) {
																echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																			<a href="'.$row['link'].'" style="color:black" target="_blank"><b>'.$row['firstName'].' ' . $row['lastName'] . ' (' .$row['team'].')</a></div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</b></div></div>';
																	} else {
																		echo '<div class="row">
																			<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
																			<a href="'.$row['link'].'" style="color:black" target="_blank">'.$row['firstName'].' ' . $row['lastName'] . ' (' .$row['team'].')</a></div>
																			<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">'.$row['homeRuns'].'</div></div>';
																	}

															}
														} else {
															echo "no rows";
														}
													} else {
														echo '<div class="row"><div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center"><h1>Players not in <br>Groups A - C</h1></div></div>';
													}
												}
											?>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-xl-4">
						<div class="card cardGOAT">
							<div class="card-header text-center">
								<h5>G.O.A.T.</h5>
							</div>
							<div class="card-body text-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
										<div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">Player</div>
										<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">HR</div>
									</div>
									<?php printRabbit($deadline); ?>
								</div>
							</div>
						</div>
						<?php
						if (new DateTime() > $deadline && new DateTime() < $final) {
							echo '<div class="card">
							<div class="card-header text-center">
								<h5>Home Runs Today</h5>
							</div>
							<div class="card-body cardScroll hrScroll">
								<div class="container-fluid text-center">';

							$sql = "select player, HR from today";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								echo '<div class="row text-center"><div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center">'.$row['player'].
								'</div><div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">'.$row['HR'].'</div></div>';
							}
						}

						echo '</div>
							</div>
						</div>';
						}
						?>
					</div>