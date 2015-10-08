<?php
require 'connect.php';
$description = $_POST["comment"];
$price = $_POST=["price"];
$urgency = $_POST["urgency"];

echo $description;
echo $price;
echo $urgency;

mysqli_query($db,"INSERT INTO jobs (description, price, urgency)
	VALUES ('". $description ."', '". $price ."', '". $urgency ."')") 
	or die(mysqli_error($db));



/*
mysqli_query($db,"INSERT INTO users (username, email, password)
	VALUES ('". $username ."', '". $email ."', '". $password ."')") 
	or die(mysqli_error($db));
*/



?>