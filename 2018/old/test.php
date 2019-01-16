<?php 
	include_once("connect.php");

	function unionKey() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}	
		$total = "";
		for ($i=1; $i <= $max; $i++) {	
			$sql = "select code from standings where id = ". $i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					if ($i < $max) {
						$total .= "select player from ";
						$total .= $row['code'];
						$total .= " union all ";
					} else {
						$total .= "select player from ";
						$total .= $row['code'];
					}
				}
			}	
		}
		return $total;
	}

	function picksA() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupA";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select player from groupA where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['player'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "'";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round(($count/$maxGroups)*100, 1);

			$sql = "update groupA set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}

	function picksB() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupB";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select player from groupB where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['player'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "'";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round(($count/$maxGroups)*100, 1);

			$sql = "update groupB set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}

	function picksC() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select player from groupC where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['player'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "'";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round((($count/$maxGroups)*100)/2, 1);

			$sql = "update groupC set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}

	function picksD() {
		global $conn;
		$sql = "select max(id) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$maxGroups = $row['max(id)'];
			}
		}

		$sql = "select max(id) from groupD";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$max = $row['max(id)'];
			}
		}

		for ($i=1; $i <= $max; $i++) {	
			$sql = "select firstName, lastName from groupD where id=".$i;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$player = $row['firstName'] . " " . $row['lastName'];
				}
			}	
		
			$key = "select count(player) from (" . unionKey() . ") as u where player = '" . $player . "'";
			$result = $conn->query($key);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$count = $row['count(player)'];
				}
			}
			$percent = round((($count/$maxGroups)*100)/4, 1);

			$sql = "update groupD set picks=".$percent." where id=".$i;
			$result = $conn->query($sql);
		}
	}

	picksA();
	picksB();
	picksC();
	picksD();
?>