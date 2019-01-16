<html>
<body>
<?php
	include_once("connect.php");
		
	function insert() {
	global $conn;
	
	$run = false;
	
	$person = "dunbar";
	$A = "Nolan Arenado";
	$B = "Josh Donaldson";
	$C1 = "Freddie Freeman";
	$C2 = "Anthony Rizzo";
	$D1 = "J.D. Martinez";
	$D2 = "Miguel Sano";
	$D3 = "Kyle Schwarber";
	$D4 = "George Springer";
	
	if ($run) {
	$sql = "insert into " . $person . " (id, player) values (1, '" . $A . "')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "insert into " . $person . " (id, player) values (2, '" . $B . "')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "insert into " . $person . " (id, player) values (3, '" . $C1 . "')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "insert into " . $person . " (id, player) values (4, '" . $C2 . "')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "insert into " . $person . " (id, player) values (5, '" . $D1 . "')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "insert into " . $person . " (id, player) values (6, '" . $D2 . "')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "insert into " . $person . " (id, player) values (7, '" . $D3 . "')";
	$result = $conn->query($sql);		
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "insert into " . $person . " (id, player) values (8, '" . $D4 . "')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	
	echo "<br>entered into " . $person . "<br><br>";
	
	$sql = "insert into groupD (firstName, lastName, team, link) values ('J.D.', 'Martinez', 'DET', 'http://espn.go.com/mlb/player/_/id/31065')";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	echo "<br> entered new D players<br>";
	
	$sql = "update " . $person . ", groupA set " . $person . ".pid = groupA.id, " . $person . ".homeRuns = groupA.homeRuns where groupA.player = " . $person . ".player and " . $person . ".id = 1";
	$result = $conn->query($sql);	
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "update " . $person . ", groupB set " . $person . ".pid = groupB.id, " . $person . ".homeRuns = groupB.homeRuns where groupB.player = " . $person . ".player and " . $person . ".id = 2";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "update " . $person . ", groupC set " . $person . ".pid = groupC.id, " . $person . ".homeRuns = groupC.homeRuns where groupC.player = " . $person . ".player and " . $person . ".id = 3";
	$result = $conn->query($sql);		
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "update " . $person . ", groupC set " . $person . ".pid = groupC.id, " . $person . ".homeRuns = groupC.homeRuns where groupC.player = " . $person . ".player and " . $person . ".id = 4";
	$result = $conn->query($sql);		
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "update " . $person . ", groupD set " . $person . ".pid = groupD.id, " . $person . ".homeRuns = groupD.homeRuns where concat(groupD.firstName, ' ', groupD.lastName) = " . $person . ".player and " . $person . ".id = 5";
	$result = $conn->query($sql);		
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "update " . $person . ", groupD set " . $person . ".pid = groupD.id, " . $person . ".homeRuns = groupD.homeRuns where concat(groupD.firstName, ' ', groupD.lastName) = " . $person . ".player and " . $person . ".id = 6";
	$result = $conn->query($sql);		
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "update " . $person . ", groupD set " . $person . ".pid = groupD.id, " . $person . ".homeRuns = groupD.homeRuns where concat(groupD.firstName, ' ', groupD.lastName) = " . $person . ".player and " . $person . ".id = 7";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	$sql = "update " . $person . ", groupD set " . $person . ".pid = groupD.id, " . $person . ".homeRuns = groupD.homeRuns where concat(groupD.firstName, ' ', groupD.lastName) = " . $person . ".player and " . $person . ".id = 8";
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Query sent<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	
	echo "<br> updated homeruns";
	
	echo "<br>finished";
	} else {
		echo "Insert disabled";
	}
	}
	
	insert();
	
?>
</body>
</html>