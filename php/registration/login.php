<?php
	require '../connect.php';
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	$_SESSION['username'] = $username;

	//echo $username;
	//echo $password;

	//Possible solution for logging a user in below.
	if($result = mysqli_query($db,"SELECT password FROM USERS WHERE password = '". $password ."' AND username = '". $username ."'")){
		$count = $result->num_rows;
		if($count>=1){
			include('../welcomepages/WelcomeCustomer.php');

		}
		else{
			include('../registration/login.php');
			echo '<script language="javascript">';
			echo 'alert("Username or password was entered incorrectly")';
			echo '</script>';

		}
	}

?>
