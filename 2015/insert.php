<html>
<body>
<?php
	include_once("connect.php");
		
	function insert() {
	global $conn;
	
	$run = true;
		
	$person = "ferg";
	$A = "Nelson Cruz";
	$B = "Mike Trout";
	$C1 = "Chris Davis";
	$C2 = "Justin Upton";
	$D1  = "Buster Posey";
	$D2 = "Mark Teixeira";
	$D3 = "Troy Tulowitzki";
	$D4 = "David Wright";
		
	$sql = "delete from ". $person;
	$result = $conn->query($sql);
	if ($result == true) {
		echo "Table emptied<br>";
	} else {
		echo "query failed: " . $conn->error . "<br>";
	}
	
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