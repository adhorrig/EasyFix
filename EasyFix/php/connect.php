<?php
	$mysqli = new mysqli("localhost", "adam", "password", "easyfix");
	if($mysqli->connect_errno){
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo "Connected successfully"
?>