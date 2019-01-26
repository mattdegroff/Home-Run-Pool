<html>
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
	
	?>
	<head>
		<title>Picks tut</title>
		<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
		<script type='text/javascript' src='script1.js'></script>
	</head>
	<body>
		<style>
		* {
			font-family: Georgia;
		}
		#stuff {
			margin: 0 auto;
			height: 300px;
			width: 520px;
			border-radius: 5px;
			text-align: center;
		}
		#name {
			border-radius: 5px;
			width: 400px;
			text-align: center;
			font-size: 24;
			font-family: Georgia;
		}
		#Name {
			padding: 10px;
			border-radius:5px;	
			background-color: red;
		}
		#name1 {
			margin: 0 auto;
			width: 400px;
			height: 40px;
			border-radius: 5px;
			background-color: blue;
		}
		#picks {
			text-align: center;
			margin-top: -20px;
			padding-top: 5px;
			padding-left: 2.5px;
			padding-right: 2.5px;
			width: 425px;
			height: 450px;
			background-color: black;
			border-radius: 5px;
			margin: 0 auto;
		}
		table {
			margin: 0 auto;
			text-align: center;
			width: 425px;
		}
		tr {
			font-size: 24;
			height: 40px;
		}
		#A {
			margin: 0 auto;
			width: 400px;
			border-radius: 5px;
			background-color: #ffd700;
		}
		#B {
			margin: 0 auto;
			width: 400px;
			border-radius: 5px;
			background-color: silver;
		}
		#C {
			margin: 0 auto;
			width: 400px;
			border-radius: 5px;
			background-color: #cd7f32;
		}
		#D {
			margin: 0 auto;
			width: 400px;
			border-radius: 5px;
			background-color: #a4c639;
		}
		select {
			border-radius: 5px;
			text-align: center;
		}
		input {
			text-align: center;
		}
		p {
			margin: 5px;
		}
		#nameTab {
			margin: 0 auto;
			text-align: center;
			width: 380px;
		}
		</style>
		
		<div id="stuff">
			<!--<div id="Name">
				<input id="name" placeholder="Name" type="text" name="name">
			</div>-->
			<div id="picks">
					<div id="name1">
					<p>
					<table id="nameTab">
					<tr>
					<td>
							<input style="width: 380px; height: 30px" placeholder="Name" type="text" name="name">
					</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="A">
					<p>
						<table>
						<tr>
							<td style="width: 40px">A</td>
							<td>
								<select style="width: 300px; height: 30px" name="a">
									<option value=""></option>
									<?php
										$sql = "select player from groupA";
										$result = mysql_query($sql);
										if (!$result) {
											die('Invalid query: ' . mysql_error());
										}
				
										while($row = mysql_fetch_assoc($result)){
											echo "<option value='".$row['player']."'>".$row['player']."</option>";
										}
									?>
								</select>
							</td>
						</tr>
						</table>
					</p>
					</div>
					<div id="B">
					<p>
					<table>
					<tr>
						<td style="width: 40px">B</td>
						<td>
							<select style="width: 300px; height: 30px" name="b">
								<option value=""></option>
								<?php
									$sql = "select player from groupB";
									$result = mysql_query($sql);
									if (!$result) {
										die('Invalid query: ' . mysql_error());
									}
				
									while($row = mysql_fetch_assoc($result)){
										echo "<option value='".$row['player']."'>".$row['player']."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="C">
					<p>
					<table>
					<tr>
						<td style="width: 40px">C</td>
						<td>
							<select id="select" style="width: 300px; height: 30px"name="c1">
								<option value=""></option>
								<?php
									$sql = "select player from groupC";
									$result = mysql_query($sql);
									if (!$result) {
										die('Invalid query: ' . mysql_error());
									}
				
									while($row = mysql_fetch_assoc($result)){
										echo "<option value='".$row['player']."'>".$row['player']."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="C">
					<p>
					<table>
					<tr>
						<td style="width: 40px">C</td>
						<td>
							<select id="select1"style="width: 300px; height: 30px"name="c2">
								<option value=""></option>
								<?php
									$sql = "select player from groupC";
									$result = mysql_query($sql);
									if (!$result) {
										die('Invalid query: ' . mysql_error());
									}
				
									while($row = mysql_fetch_assoc($result)){
										echo "<option value='".$row['player']."'>".$row['player']."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="D">
					<p>
					<table>
					<tr>
						<td style="width: 40px">D</td>
						<td>
							<input style="width: 300px; height: 30px" type="text" placeholder="Enter full name" name="d1">
						</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="D">
					<p>
					<table>
					<tr>
						<td style="width: 40px">D</td>
						<td>
							<input style="width: 300px; height: 30px" type="text" placeholder="Enter full name" name="d2">
						</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="D">
					<p>
					<table>
					<tr>
						<td style="width: 40px">D</td>
						<td>
							<input style="width: 300px; height: 30px" type="text" placeholder="Enter full name" name="d3">
						</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="D">
					<p>
					<table>
					<tr>
						<td style="width: 40px">D</td>
						<td>
							<input style="width: 300px; height: 30px" type="text" placeholder="Enter full name" name="d4">
						</td>
					</tr>
					</table>
					</p>
					</div>
					<div id="submit">
					<input type="submit" name="Submit">
					</div>
			</div>
		</div>
	</body>
</html>