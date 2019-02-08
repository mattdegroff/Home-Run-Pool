<?php
session_start();
$_SESSION['year'] = 2019;
include("connect.php");

$sql = "select code, count(code) from standings";
		$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
                echo $row['count(code)'];
				$sql1 = "delete from ".$row['code'];
		        if($result = $conn->query($sql1)) { 
                    echo $row['code']." success";
                }
			}
        echo "delete complete";

        ?>
        