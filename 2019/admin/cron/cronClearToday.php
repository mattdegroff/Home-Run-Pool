
<?php
	session_start();
	include_once("../../connect.php");
	
	$sql = "delete from today";
	$result = $conn->query($sql);
?>