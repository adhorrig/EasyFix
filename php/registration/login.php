<?php
	require '../connect.php';
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	$_SESSION['username'] = $username;

	$sql = "SELECT AccountType, password, username FROM users WHERE password = '". $password ."' AND username = '". $username ."'";
	$result = $db->query($sql);

	if($result->num_rows){
			while($row = $result->fetch_assoc()){
					$count = $result->num_rows;
					$accounttype = $row["AccountType"];
					if($count>=1){
							if($accounttype == "Customer"){
									include('../welcomepages/WelcomeCustomer.php');
							}
							else if($accounttype = "Tradesmen"){
									include('../welcomepages/WelcomeTrade.php');
							}
					}
					else{
							include('../registration/login.php');
							echo '<script language="javascript">';
							echo 'alert("Username or password was entered incorrectly")';
							echo '</script>';
					}
			}
	}

?>
