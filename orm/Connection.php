<?php
	$mysql_server = "186.202.152.20";
	$mysql_user = "pbebe_cms";
	$mysql_password = "comberweb2016";
	$mysql_db = "pbeber2013_cms";
	$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	$mysqli->set_charset("utf8");
			
?>