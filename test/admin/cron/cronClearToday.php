#!/usr/bin/php -q

<?php
	include_once("../../connect.php");
	
	$sql = "delete from today";
	$result = $conn->query($sql);
?>