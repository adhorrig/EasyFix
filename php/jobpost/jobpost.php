<?php
	require '../connect.php';
	session_start();
	$_SESSION['username'];
	$description = $_POST["comment"];
	$price = $_POST["price"];
	$urgency = $_POST["urgency"];
	$category = $_POST["category"];
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
		mysqli_query($db,"INSERT INTO jobs (description, price, urgency, username, photo, category)
		VALUES ('". $description ."', '". $price ."', '". $urgency ."', '". $_SESSION['username']. "', '". $uniqname . "', '". $category . "')")
		or die(mysqli_error($db));
		include('JobPostConfirm.php');
	}
?>
