<?php
	include 'connect.php';
	if (isset($_POST['criticName'])) {
	    $criticName = $_POST['criticName'];
	}
	if (isset($_POST['criticBio'])) {
	    $criticBio= $_POST['criticBio'];
	}
	if (isset($_POST['criticPhoto'])) {
	    $criticPhoto = $_POST['criticPhoto'];
	}
	if (isset($_POST['criticEmail'])) {
	    $criticEmail = $_POST['criticEmail'];
	}
	if (isset($_POST['criticPswrd'])) {
	    $criticPswrd = $_POST['criticPswrd'];
	}

	$stmt=$db->prepare("INSERT INTO `critics` (criticName, criticBio, criticPhoto, criticEmail, criticPswrd) VALUES(?,?,?,?,?)");
	$stmt->bind_param('sssss', $criticName, $criticBio, $criticPhoto, $criticEmail, $criticPswrd);
	$stmt->execute();
	$stmt->close();
	header("Location: display-prep.php");
	?>