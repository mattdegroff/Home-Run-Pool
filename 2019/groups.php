<html>
<body>
<style>
		html {
			height: 100%;
			width: 100%;
		}
		table {
			border-radius: 5px;
		}
		#picks {
			border-style: 6px;
			border-color: #ff0000;
		}

		* {
			font-size: 14px;
			align: center;
			text-align: center;
		}
		table {
			align: center;
		}
		td {
			vertical-align: top;
		}
		#dark {
			color: white;
		}
		#yellow {
			color:yellow;
		}
		#total {
			outline: thin solid black;
		}
		#red {
			color: red;
		}

	</style>
<table align=center>
								<tbody>
										<?php

										include_once("connect2016.php");
										include_once("update.php");

										$deadline = new DateTime("2017-02-02 13:10:00");
										$groupDead = new DateTime("2017-02-24 12:00:00");


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
												} else if ($font == 3) {
													echo '<thead id="red">';
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
														echo "<tr><th>".$name."</th></tr></thead>";
													} else {
														echo "<tr><th>*".$name."</th></tr></thead>";
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
												} else if ($font == 3) {
													if (new DateTime() > $deadline) {
														echo '<tbody><tr><td><table id="red"><thead><tr>
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
													if ($i % 6 == 0) {
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
											</body>
										</html>
