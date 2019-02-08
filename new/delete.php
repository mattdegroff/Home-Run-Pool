<?php
session_start();
$_SESSION['year'] = 2019;
include("connect.php");

$sql = "select code, count(code) from standings";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
                echo $row['count(code)'];
				$sql = "delete from ".$row['code'];
		        if($result = $conn->query($sql)) { 
                    echo $row['code']." success";
                }
			}
        }
        echo "delete complete";

        ?>
        