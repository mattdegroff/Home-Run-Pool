<?php
	include_once("../connect.php");
	global $conn;
	
	if(isset($_POST['Submit'])){
		echo $_POST['Submit'];
		$sql = "select name, paid from standings where name = '" . $_POST["name"] . "'";
		$result = $conn->query($sql);
		if ($result) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					if ($row['paid'] == 1) {
						$sql1 = "update standings set paid = 0 where name = '" . $row['name'] . "'";
						$result = $conn->query($sql1);
						echo $row['name'] . " has not paid";
					} else if ($row['paid'] == 0) {
						$sql1 = "update standings set paid = 1 where name = '" . $row['name'] . "'";
						$result = $conn->query($sql1);
						echo $row['name'] . " has paid";
					}
				}
			}
		}
		header('Location: pay.php');
		exit();
	}
?>

<html>
	<head></head>
	<body>
	<p>enter name for person who paid</p>
		<form method="post" action="pay.php">
			<input type="text" name="name">
			<input type="submit" value="Submit" name="Submit">
		</form>
		<table>
			<thead>
				<tr><th>Names</th><th>Paid</th></tr>
			</thead>
			<tbody>
			<?php
				$sql = "select name, paid from standings";
					$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($row['paid'] == 1) {
								echo "<tr><td>" . $row['name'] . "</td><td>yes</td></tr>";
							} else {
								echo "<tr><td>" . $row['name'] . "</td><td>no</td></tr>";
							}
						}
				}
				?>
			</tbody>
		</table>
	</body>
</html>