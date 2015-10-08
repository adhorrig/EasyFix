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
			echo "You can login now";
		}
		else{
			echo "The login credentials were incorrect";
		}
	}
	
?>