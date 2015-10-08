<?php
$db = mysqli_connect('localhost','adam','password','easyfix', '3307'); //3307 in college, 3306 if home
if(mysqli_connect_errno()){
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
?>