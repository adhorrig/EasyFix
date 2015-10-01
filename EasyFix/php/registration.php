<?php
	require 'connect.php';
	$username = $_POST["Username"];
	$email = $_POST["Email"];
	$password = $_POST["Password"];
	$cpassword = $_POST["Cpassword"];
	
	$query = "INSERT INTO users VALUES (NUll, $username, $email, $password, $cpassword)";
	$mysqli->query($query);
	
	$mysqli->close();
?>
