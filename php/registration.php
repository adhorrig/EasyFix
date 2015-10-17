<?php
	require 'connect.php';
	$username = $_POST["Username"];
	$email = $_POST["Email"];
	$password = $_POST["Password"];
	$cpassword = $_POST["Cpassword"];
	$accounttype = $_POST["Actype"];
	
	//echo $username;
	//echo $email;
	//echo $password;
	//echo $cpassword;
	
	mysqli_query($db,"INSERT INTO users (username, email, password, AccountType)
	VALUES ('". $username ."', '". $email ."', '". $password ."', '". $accounttype ."')") 
	or die(mysqli_error($db));
	include('../html/login.html');
 
	

?>
