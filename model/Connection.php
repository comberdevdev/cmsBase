<?php
	$mysql_server = "127.0.0.1";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_db = "cms";
	$mysqli = new MySQLi('localhost', 'root', '');
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	// $mysqli->set_charset("utf8");
			
?>