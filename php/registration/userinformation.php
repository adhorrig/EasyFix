<?php
	require '../connect.php';
	session_start();
	$forename = $_POST["forename"];
	$surname = $_POST["surname"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$phonenumber = $_POST["phone"];
	

	$dlocation = $address;
	$addressL = $dlocation;
    $prepAddr = str_replace(' ','+',$addressL);
    $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
    $output= json_decode($geocode);
    $latitude = $output->results[0]->geometry->location->lat;
    $longitude = $output->results[0]->geometry->location->lng;



	mysqli_query($db,"INSERT INTO userinformation (address, forename, surname, gender, age, username, phonenumber, latitude, longitude)
	VALUES ('". $address ."', '". $forename ."', '". $surname ."', '". $gender ."', '". $age ."', '". $_SESSION["usernameReg"] ."', '". $phonenumber ."', '". $latitude ."', '". $longitude ."')")
	or die(mysqli_error($db));
	header('Location: ../../html/registration/login.html')
?>
