<html>
	<body>		
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
		
		<form action="index.php" method="post">
			Password: <input name="password" type="password" /> 
			<input type="submit" />
		</form>
		
		<?php
			if (isset($_POST['password']) and $_POST['password'] === "demboyz" )
			{
				echo '<table>';
				$sql = "select name, pass from passwords";
									$result = mysql_query($sql);
									if (!$result) {
										die('Invalid query: ' . mysql_error());
									}
				
									while($row = mysql_fetch_assoc($result)){
										echo '<tr><td>'.$row['name'].'</td><td>'.$row['pass'].'</td></tr>';
									}
				echo '</table>';
			}
		?>
	</body>
</html>

