<?php
	$servername="localhost";
	$username="easyfix"
	$password="easyfix";
	
	$connect=new mysqli($servername, $username, $password);
	
	if($connect->connect_error){
		die("Connection failed " . $connect->connect_error);
	}
	echo "Connected successfully"
?>