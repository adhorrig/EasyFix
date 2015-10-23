<?php 
	require 'connect.php';
	$forename = $_POST["forename"];
	$surname = $_POST["surname"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];


	mysqli_query($db,"INSERT INTO userinformation (address, forename, surname, gender, age)
	VALUES ('". $address ."', '". $forename ."', '". $surname ."', '". $gender ."', '". $age ."')")
	or die(mysqli_error($db));
	include('../html/login.html');
?>