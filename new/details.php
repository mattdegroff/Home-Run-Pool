<?php
	session_start();
	include("connect.php");
    if (substr($_GET["id"],0,4) == "2015"){
		include_once("connect.php?year=2015");
		$colorA = 'red';
		$colorB = '#1e90ff';
		$colorC = 'yellow';
		$colorD = '#20ff00';
		$deadline = new DateTime('2015-04-05T13:10:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2015-03-03T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2015-10-04T23:59:59', new DateTimeZone('America/New_York'));
	} else if (substr($_GET["id"],0,4) == "2016"){
		nclude_once("connect.php?year=2016");
		$colorA = '#ffd700';
		$colorB = 'silver';
		$colorC = '#cd7f32';
		$colorD = '#a4c639';
		$deadline = new DateTime('2016-04-03T13:10:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2016-02-27T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2016-10-02T23:59:59', new DateTimeZone('America/New_York'));
	} else if (substr($_GET["id"],0,4) == "2017"){
		nclude_once("connect.php?year=2017");
		$colorA = '#d10000';
		$colorB = '#ff7171';
		$colorC = '#ffafaf';
		$colorD = '#white';
		$deadline = new DateTime('2017-04-02T13:10:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2017-03-01T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2017-10-01T23:59:59', new DateTimeZone('America/New_York'));
	} else if (substr($_GET["id"],0,4) == "2018"){
		nclude_once("connect.php?year=2018");
		$colorA = '#00cc66';
		$colorB = '#d9d9d9';
		$colorC = '#00cc66';
		$colorD = '#d9d9d9';
		$deadline = new DateTime('2018-03-29T12:40:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2018-02-12T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2018-09-30T23:59:59', new DateTimeZone('America/New_York'));
	} else if ($_SESSION['year'] == 2019) {
		$colorA = '#92d050';
		$colorB = '#00b0f0';
		$colorC = '#ffd966';
		$colorD = '#00b050';
		$deadline = new DateTime('2018-03-28T13:05:00', new DateTimeZone('America/New_York'));
		$groupDead = new DateTime('2018-02-21T12:00:00', new DateTimeZone('America/New_York'));
		$final = new DateTime('2019-09-29T23:59:59', new DateTimeZone('America/New_York'));
		echo $colorA;
	}
?>