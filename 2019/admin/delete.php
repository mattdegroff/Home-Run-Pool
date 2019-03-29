<?php
session_start();
$_SESSION['year'] = 2019;
include("../connect.php");

$run = false;

if ( $run ) {
    $sql = "select code from standings";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo $row['code']."<br>";
        $sql1 = "delete from ".$row['code'];
        if($result1 = $conn->query($sql1)) { 
            echo $row['code']." success<br>";
        }
    }
    echo "delete complete";
}
        ?>
        