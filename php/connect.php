<?php
$db = mysqli_connect('localhost','root','password','easyfix');
if(mysqli_connect_errno()){
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
?>