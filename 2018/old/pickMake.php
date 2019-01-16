<?php include_once("connect.php"); ?>

<html>
	<body>
		<form>
			<fieldset>
				<legend>Make Picks</legend>
				A: <select name="A">
					<?php
						$sql = "select player from groupA";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row['player'].">".$row['player']."</option>";
							}
						}
						echo "</select><br>";
					?>
				B: <select name="B">
					<?php
						$sql = "select player from groupB";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row['player'].">".$row['player']."</option>";
							}
						}
						echo "</select><br>";
					?>
				C: <select name="C1" onchange="remove(this.value)">
					<?php
						$sql = "select player from groupC";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row['player'].">".$row['player']."</option>";
							}
						}
						echo "</select><br>";
					?>
					<script language="javascript" type="text/javascript">
					function remove(C1) {
						var select1 = document.getElementById('C2');
						for (var i=0; i < select1; i++) {
							if (select1.options[i].value == C1) {
								select1.hide(i);
							}
						}	
					}					
					</script>
				C: <select name="C2">
					<?php
						$sql = "select player from groupC";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row['player'].">".$row['player']."</option>";
							}
						}
						echo "</select><br>";
					?>
				D: <input type="text" name="D1"></input><br>
				D: <input type="text" name="D2"></input><br>
				D: <input type="text" name="D3"></input><br>
				D: <input type="text" name="D4"></input><br><br>
				<input type="submit" value="Submit">
			</fieldset>
		</form>
	</body>
</html>
					