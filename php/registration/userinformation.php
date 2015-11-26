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
	
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$uniqname = uniqid() . '.jpg';
	$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
	$allowedExtensions = array("jpeg", "jpg", "png");
	if (in_array($file_ext, $allowedExtensions) === false) {
		die("extension not allowed, please choose a JPEG or PNG file.");
	}
	if ($file_size > 1048576) {
		die('File size can not be greater than 1mb');
	} else {
		move_uploaded_file($file_tmp, "../../images/" . $uniqname);
		mysqli_query($db,"INSERT INTO userinformation (address, forename, surname, gender, age, username, phonenumber, latitude, longitude, profilepic)
		VALUES ('". $address ."', '". $forename ."', '". $surname ."', '". $gender ."', '". $age ."', '". $_SESSION["usernameReg"] ."', '". $phonenumber ."', '". $latitude ."', '". $longitude ."', '". $uniqname ."')")
		or die(mysqli_error($db));
		header('Location: ../../html/registration/login.html');
	}
?>
