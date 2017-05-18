<?php
if(isset($_POST['criticName']) && isset($_POST['criticPswrd'])){
include('../connect.php');
$criticName=$_POST['criticName'];
$criticBio=$_POST['criticBio'];
$criticEmail=$_POST['criticEmail'];
$criticPswrd=$_POST['criticPswrd'];
$criticPhoto="new.png";
insertCritic();
session_start();
	$_SESSION['uId']=$userId;
	$_SESSION['uPhoto']=$userPhoto;
	$_SESSION['uName']=$userName;
	$_SESSION['uBio']=$userBio;
	$_SESSION['uEmail']=$userEmail;
	header("Location: ../admin.php?sign=pro");	
}else{
	header("Location: ../admin.php?sign=up");
}

?>