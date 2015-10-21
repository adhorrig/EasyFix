<?php
	require 'connect.php';
	$username = $_POST["Username"];
	$email = $_POST["Email"];
	$password = $_POST["Password"];
	$cpassword = $_POST["Cpassword"];
	$accounttype = $_POST["Actype"];
	
	if($checkusername = mysqli_query($db, "SELECT username, email FROM USERS WHERE username = '". $username ."'")){
		$count = $checkusername->num_rows;
		if($count>=1){
			echo "That username already exists";
		} else {
			mysqli_query($db,"INSERT INTO users (username, email, password, AccountType)
			VALUES ('". $username ."', '". $email ."', '". $password ."', '". $accounttype ."')") 
			or die(mysqli_error($db));
			include('../html/login.html');
		}
	}
?>
