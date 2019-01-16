<html>
	<body>		
		<?php
			include_once("../connect.php");
		?>
		
		<form action="index.php" method="post">
			Password: <input name="password" type="password" /> 
			<input type="submit" />
		</form>
		
		<?php
			if (isset($_POST['password']) and $_POST['password'] === "demboyz" )
			{
				echo '<table>';
				$sql = "select name, pass from standings";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){ 
						echo '<tr><td>'.$row['name'].'</td><td>'.$row['pass'].'</td></tr>';
					}
				}
				echo '</table>';
			}
		?>
	</body>
</html>

