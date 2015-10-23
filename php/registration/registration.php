<?php
	require 'connect.php';
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	$accounttype = $_POST["actype"];
	
	if($checkusername = mysqli_query($db, "SELECT username, email FROM USERS WHERE username = '". $username ."'")){
		$count = $checkusername->num_rows;
		if($count>=1){
			echo "That username already exists";
		} else {
			mysqli_query($db,"INSERT INTO users (username, email, password, AccountType)
			VALUES ('". $username ."', '". $email ."', '". $password ."', '". $accounttype ."')") 
			or die(mysqli_error($db));
			include('../html/UserInformation.html');
		}
	}
?>
