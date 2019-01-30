<?php

		function Apic() {
			global $conn;
			$imglink = "";
			$sql = "SELECT link FROM groupA ORDER BY homeRuns DESC LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$link = $row['link'];
			}
		}

		$str = file_get_contents($link);

		$scan = '<div class="main-headshot"><img src="';
		$len = strlen($scan);
		$pos = strpos($str, $scan);
		$pos += $len;
		while ($str[$pos] != '"') {
			$imglink .= $str[$pos];
			$pos++;
		}

		return $imglink;
	}
	function Bpic() {
			global $conn;
			$imglink = "";
			$sql = "SELECT link FROM groupB ORDER BY homeRuns DESC LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$link = $row['link'];
			}
		}

		$str = file_get_contents($link);

		$scan = '<div class="main-headshot"><img src="';
		$len = strlen($scan);
		$pos = strpos($str, $scan);
		$pos += $len;
		while ($str[$pos] != '"') {
			$imglink .= $str[$pos];
			$pos++;
		}

		return $imglink;
	}
	function Cpic() {
			global $conn;
			$imglink = "";
			$sql = "SELECT link FROM groupC ORDER BY homeRuns DESC LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$link = $row['link'];
			}
		}

		$str = file_get_contents($link);

		$scan = '<div class="main-headshot"><img src="';
		$len = strlen($scan);
		$pos = strpos($str, $scan);
		$pos += $len;
		while ($str[$pos] != '"') {
			$imglink .= $str[$pos];
			$pos++;
		}

		return $imglink;
	}
	function Dpic() {
			global $conn;
			$imglink = "";
			$sql = "SELECT link FROM groupD ORDER BY homeRuns DESC LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$link = $row['link'];
			}
		}

		$str = file_get_contents($link);

		$scan = '<div class="main-headshot"><img src="';
		$len = strlen($scan);
		$pos = strpos($str, $scan);
		$pos += $len;
		while ($str[$pos] != '"') {
			$imglink .= $str[$pos];
			$pos++;
		}

		return $imglink;
	}
	function standings($deadline) {
				global $conn;
				$a = 2;
				$b = 4;
				$c = 3;
				$d = 3;
				if (new DateTime() < $deadline) {
					$rank = 1;
					$sql = "select id, color, name, font from standings order by name";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($row['id'] > 0) {
							$name = $row['name'];
							$color = $row['color'];
							$font = $row['font'];

							if ($font == 1) {
								echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="dark" style="background-color:'.$color.'">'.$rank.'</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . ' text-center" id="dark" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . ' text-center" id="dark" style="background-color:'.$color.'">0</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . ' text-center" id="dark" style="background-color:'.$color.'">--</div></div>';
							} else if ($font == 2) {
								echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="yellow" style="background-color:'.$color.'">'.$rank.'</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . ' text-center" id="yellow" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . ' text-center" id="yellow" style="background-color:'.$color.'">0</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . ' text-center" id="yellow" style="background-color:'.$color.'">--</div></div>';
					 		} else if ($font == 3) {
								echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="red" style="background-color:'.$color.'">'.$rank.'</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . ' text-center" id="red" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . ' text-center" id="red" style="background-color:'.$color.'">0</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . ' text-center" id="red" style="background-color:'.$color.'">--</div></div>';
						 	} else {
								echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" style="background-color:'.$color.'">'.$rank.'</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . ' text-center" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . ' text-center" style="background-color:'.$color.'">0</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . ' text-center" style="background-color:'.$color.'">--</div></div>';
						 	}
							$rank++;
						}
						}
					}
				} else {
					$rank = 1;
					$most = 0;
					$back = 0;
					$prev = 0;
					$prevHR = 0;
					$sql = "select id, name, color, homeRuns, font, code from standings order by homeRuns desc, name";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($row['id'] > 0) {
							$name = $row['name'];
							$color = $row['color'];
							$hr = $row['homeRuns'];
							$font = $row['font'];
							$code = $row['code'];

							if ($rank == 1) {
								$most = $hr;
								$prev = $rank;
								$prevHR = $hr;
							} else {
								$back = $hr - $most;
							}

							if ($font == 1) {
								if ($rank == 1) {
									echo '<div class="row">
									 <div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="dark" style="background-color:'.$color.'">'.$rank.'</div>
									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="dark" style="background-color:'.$color.'">'.$name.'</div>
									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="dark" style="background-color:'.$color.'">'.$hr.'</div>
									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="dark" style="background-color:'.$color.'">--</div></div>';
								} else if ($back == 0){
									echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="dark" style="background-color:'.$color.'">--</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="dark" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="dark" style="background-color:'.$color.'">'.$hr.'</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="dark" style="background-color:'.$color.'">--</div></div>';
								} else {
									if ($hr == $prevHR) {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="dark" style="background-color:'.$color.'">--</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="dark" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="dark" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="dark" style="background-color:'.$color.'">'.$back.'</div></div>';
									} else {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="dark" style="background-color:'.$color.'">'.$rank.'</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="dark" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="dark" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="dark" style="background-color:'.$color.'">'.$back.'</div></div>';
										$prev = $rank;
									}
								}
							} else if ($font == 2) {
								if ($rank == 1) {
									echo '<div class="row">
									 <div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="yellow" style="background-color:'.$color.'">'.$rank.'</div>
									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="yellow" style="background-color:'.$color.'">'.$name.'</div>
									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="yellow" style="background-color:'.$color.'">'.$hr.'</div>
									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="yellow" style="background-color:'.$color.'">--</div></div>';
								} else if ($back == 0){
									echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="yellow" style="background-color:'.$color.'">--</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="yellow" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="yellow" style="background-color:'.$color.'">'.$hr.'</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="yellow" style="background-color:'.$color.'">--</div></div>';
								} else {
									if ($hr == $prevHR) {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="yellow" style="background-color:'.$color.'">--</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="yellow" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="yellow" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="yellow" style="background-color:'.$color.'">'.$back.'</div></div>';
									} else {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="yellow" style="background-color:'.$color.'">'.$rank.'</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="yellow" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="yellow" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="yellow" style="background-color:'.$color.'">'.$back.'</div></div>';
										$prev = $rank;
									}
								}
							} else if ($font == 3) {
								if ($rank == 1) {
									echo '<div class="row">
									 <div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="red" style="background-color:'.$color.'">'.$rank.'</div>
									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="red" style="background-color:'.$color.'">'.$name.'</div>
									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="red" style="background-color:'.$color.'">'.$hr.'</div>
									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="red" style="background-color:'.$color.'">--</div></div>';
								} else if ($back == 0){
									echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="red" style="background-color:'.$color.'">--</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="red" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="red" style="background-color:'.$color.'">'.$hr.'</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="red" style="background-color:'.$color.'">--</div></div>';
								} else {
									if ($hr == $prevHR) {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="red" style="background-color:'.$color.'">--</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="red" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="red" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="red" style="background-color:'.$color.'">'.$back.'</div></div>';
									} else {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" id="red" style="background-color:'.$color.'">'.$rank.'</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" id="red" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" id="red" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" id="red" style="background-color:'.$color.'">'.$back.'</div></div>';
										$prev = $rank;
									}
								}
							} else {
								if ($rank == 1) {
									echo '<div class="row">
									 <div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" style="background-color:'.$color.'">'.$rank.'</div>
									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" style="background-color:'.$color.'">'.$name.'</div>
									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" style="background-color:'.$color.'">'.$hr.'</div>
									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" style="background-color:'.$color.'">--</div></div>';
								} else if ($back == 0){
									echo '<div class="row">
									<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" style="background-color:'.$color.'">--</div>
									<div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" style="background-color:'.$color.'">'.$name.'</div>
									<div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" style="background-color:'.$color.'">'.$hr.'</div>
									<div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" style="background-color:'.$color.'">--</div></div>';
								} else {
									if ($hr == $prevHR) {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" style="background-color:'.$color.'">--</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" style="background-color:'.$color.'">'.$back.'</div></div>';
									} else {
										echo '<div class="row">
										<div class="col-' . $a . ' col-sm-' . $a . ' col-md-' . $a . ' col-lg-' . $a . ' col-xl-' . $a . ' text-center" style="background-color:'.$color.'">'.$rank.'</div>
 									 <div class="col-' . $b . ' col-sm-' . $b . ' col-md-' . $b . ' col-lg-' . $b . ' col-xl-' . $b . '  text-center" style="background-color:'.$color.'">'.$name.'</div>
 									 <div class="col-' . $c . ' col-sm-' . $c . ' col-md-' . $c . ' col-lg-' . $c . ' col-xl-' . $c . '  text-center" style="background-color:'.$color.'">'.$hr.'</div>
 									 <div class="col-' . $d . ' col-sm-' . $d . ' col-md-' . $d . ' col-lg-' . $d . ' col-xl-' . $d . '  text-center" style="background-color:'.$color.'">'.$back.'</div></div>';
										$prev = $rank;
									}
								}
							}
							if ($rank != 1) {
								$prevHR = $hr;
							}
							$rank++;
						}
					}
					}
				}
			}

			function sum($table) {
				global $conn;
				$sql = "select sum(homeRuns) from (select homeRuns from ".$table." order by homeRuns desc limit 7) as t";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$sum = $row['sum(homeRuns)'];
					}
				}

				return $sum;
			}

			function printRabbit($deadline) {
				global $conn;
				$a =2;
				$b =7;
				$c =3;
				global $colorA, $colorB, $colorC, $colorD;
				$sql = "select id, player, homeRuns from rabbit order by homeRuns desc limit 7";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$id = $row['id'];
						$sql = "select max(id) from rabbit where homeRuns = (select min(homeRuns) from rabbit)";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row1 = $result->fetch_assoc()){
								$pid = $row1['max(id)'];
							}
						}
					}
				}

				$sql = "select id, player, homeRuns, gr, color from rabbit";
				$result = $conn->query($sql);

				if (new DateTime() > $deadline) {
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$row['color'].'"><del>'.$row['gr'].'</del></div>
								<div class="col-' . $b .' text-center" style="background-color: '.$row['color'].'"><del>'.$row['player'].'</del></div>
								<div class="col-' . $c .' text-center" style="background-color: '.$row['color'].'"><del>'.$row['homeRuns'].'</del></div></div>';
							} else {
								echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$row['color'].'">'.$row['gr'].'</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$row['color'].'">'.$row['player'].'</div>
								<div class="col-' . $c .' text-center" style="background-color: '.$row['color'].'">'.$row['homeRuns'].'</div></div>';
							}

						}
					}
				} else {
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorA.'">A</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorA.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorA.'"> -- </div></div>';
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorB.'">B</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorB.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorB.'"> -- </div></div>';
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorC.'">C</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorC.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorC.'"> -- </div></div>';
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorC.'">C</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorC.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorC.'"> -- </div></div>';
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorD.'">D</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorD.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorD.'"> -- </div></div>';
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorD.'">D</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorD.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorD.'"> -- </div></div>';
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorD.'">D</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorD.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorD.'"> -- </div></div>';
					echo '<div class="row"><div class="col-' . $a .' text-center" style="background-color: '.$colorD.'">D</div>
								<div class="col-' . $b .' text-center" style="background-color: '.$colorD.'"> ------- </div>
								<div class="col-' . $c .' text-center" style="background-color: '.$colorD.'"> -- </div></div>';
				}

				if (new DateTime() > $deadline) {
					$total=sum('rabbit');
					echo '<div class="row"><div class="col-'.($a+$b).'"><b>Total</div><div class="col-'.$c.'">'.$total.'</b></div></div>';
				} else {
					echo '<div class="row"><div class="col-'.($a+$b).'"><b>Total</div><div class="col-'.$c.'">0</b></div></div>';
				}
			}

			function printGroup($table) {
				global $conn;
				$sql = "select id, homeRuns from ".$table." order by homeRuns desc limit 7";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$id = $row['id'];
						$sql = "select max(id) from ".$table." where homeRuns = (select min(homeRuns) from ".$table.")";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row1 = $result->fetch_assoc()){
								$pid = $row1['max(id)'];
							}
						}
					}
				}
				for ($i=1; $i <=8; $i++) {
					$sql = "select id, player, homeRuns from ".$table." where id=".$i;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							if ($pid === $row['id']) {
								echo '<div class="row"><div id="drop" class="col-8 text-center">'.$row['player'].'</div><div id="drop" class="col-4 text-center">'.$row['homeRuns']."</div></div>";
							} else {
								echo '<div class="row"><div class="col-8 text-center">'.$row['player'].'</div><div class="col-4 text-center">'.$row['homeRuns']."</div></div>";
							}
						}
					}
					$total=sum($table);
				}
				echo '<div class="row"><div class="col-8 text-center"><b>Total</div><div class="col-4 text-center">'.$total."</b></div></div>";
			}

			function printGroups($deadline) {
				global $conn;
									$sql = "SELECT max(id) FROM standings";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()){
											$max = $row['max(id)'];
											echo $max;
										}
									}
									echo '<div class="row">';

									for ($i = 1; $i <= $max; $i++) {
										echo "<div class='col-lg-3'>";
										$sql = "SELECT color, name, code, font, paid FROM standings where id=".$i;
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()){
												if ($row['color'] == 'white') {
													echo '<div class="card" style="border-color: 1px solid rgba(0, 0, 0, 0.2)">';
												} else {
													echo '<div class="card" style="border-color: '.$row['color'].'">';
												}
												if ($row['font'] == 1) {
													echo '<div class="card-header text-center" id="dark" style="background-color: '.$row['color'].'">';
												} else if ($row['font'] == 2) {
													echo '<div class="card-header text-center" id="yellow" style="background-color: '.$row['color'].'">';
												} else if ($row['font'] == 3) {
													echo '<div class="card-header text-center" id="red" style="background-color: '.$row['color'].'">';
												} else {
													if ($row['color'] == 'white') {
														echo '<div class="card-header text-center" style="background-color: white; border-bottom: 1px solid rgba(0, 0, 0, 0.2);">';
													} else {
														echo '<div class="card-header text-center" style="background-color: '.$row['color'].'">';
													}
												}
												if ($row['paid'] == 1) {
													echo '<h5>'.$row['name'].'</h5></div>';
												} else {
													echo '<h5>*'.$row['name'].'*</h5></div>';
												}
												if (new DateTime() > $deadline) {
				  								echo '<div  class="card-text cardPart text-center">
														<div class="container-fluid">
						  									<div class="row">
												  				<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8"><b>Player</b></div>
												  				<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><b>HR</b></div>
												  			</div>';
											  		printGroup($row['code']);

											  	echo '</div></div></div>';
											  	} else {
											  		echo "</div>";
											  	}
													echo "</div>";
											}
										}

										if ($i % 4 == 0) {
											if ($i == $max) {
												echo "</div>";
											} else {
												echo '</div><div class="row">';
											}
										} else {
											if ($i == $max) {
												$add = 4-($i%4);
												for ($j=1; $j <= $add; $j++) {
													echo '<div class="card" ></div>';
												}
												echo "</div>";
											}
										}
									}
									}
?>
