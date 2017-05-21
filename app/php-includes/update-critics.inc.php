<?php
session_start();
include '../php-functions/update-critics.fn.php';
include '../php-functions/test-critics.fn.php';
if(isset($_POST['criticName']) && isset($_POST['criticPswrd'])){
	include('../connect.php');
	if(isset($_SESSION['uId'])){
		$id=$_SESSION['uId'];		
	}else{
		$id=0;
	}

	if(isset($_POST['criticName'])){
		$criticName=$_POST['criticName'];
		if($_SESSION['uName']!=$criticName){
			$_SESSION['uName']=$criticName;
		}	
	}
	if(isset($_POST['criticBio'])){
		$criticBio=$_POST['criticBio'];
		if($_SESSION['uBio']!=$criticBio){
			$_SESSION['uBio']=$criticBio;
		}
	}
	if(isset($_POST['criticEmail'])){
		$criticEmail=$_POST['criticEmail'];
		if($_SESSION['uEmail']!=$criticEmail){
			$_SESSION['uEmail']=$criticEmail;
		}
	}
	if(isset($_POST['criticPswrd'])){
		$criticPswrd=$_POST['criticPswrd'];
		if($_SESSION['uPswrd']!=$criticPswrd){
			$_SESSION['uPswrd']=$criticPswrd;
		}
	}
	$test=testCritics($criticName);
	if($test==false){
		updateCritics($id,$criticName,$criticBio,$criticEmail,$criticPswrd);
		header("Location: ../admin.php?caller=critics");
	}else{
		header("Location: ../admin.php?caller=critics&error=Namedup");

	}

}else{
	echo "<script type='text/javascript'>alert('Name and Password required')</script>";
}

?>