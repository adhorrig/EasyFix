<?php
	require 'connect.php';
	$username = $_POST["Username"];
	$email = $_POST["Email"];
	$password = $_POST["Password"];
	$cpassword = $_POST["Cpassword"];
	
	//echo $username;
	//echo $email;
	//echo $password;
	//echo $cpassword;
	
	mysqli_query($db,"INSERT INTO users (username, email, password)
	VALUES ('". $username ."', '". $email ."', '". $password ."')") 
	or die(mysqli_error($db));
 
	mysqli_close($db);
	

?>
