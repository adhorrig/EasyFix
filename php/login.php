<?php
	require 'connect.php';
	$username = $_POST["username"];
	$password = $_POST["password"];

	//echo $username;
	//echo $password;
	
	//Possible solution for logging a user in below. 
	if($result = mysqli_query($db,"SELECT password FROM USERS WHERE password = '". $password ."' AND username = '". $username ."'")){
		$count = $result->num_rows;
		if($count>=1){
			include('../html/WelcomeCustomer.html');
			
		}
		else{
			echo "The login credentials were incorrect";
		}
	}
	
?>