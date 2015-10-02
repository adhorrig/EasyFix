<?php
$db = mysqli_connect('localhost','adam','password','easyfix', '3306');
if(mysqli_connect_errno()){
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
?>