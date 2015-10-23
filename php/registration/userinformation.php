<?php
	require '../connect.php';
	$forename = $_POST["forename"];
	$surname = $_POST["surname"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$phonenumber = $_POST["phone"];


	mysqli_query($db,"INSERT INTO userinformation (address, forename, surname, gender, age, phonenumber)
	VALUES ('". $address ."', '". $forename ."', '". $surname ."', '". $gender ."', '". $age ."', '". $phonenumber ."')")
	or die(mysqli_error($db));
	include('../../html/registration/login.html');
?>
