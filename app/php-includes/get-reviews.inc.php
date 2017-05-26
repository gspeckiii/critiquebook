<?php
session_start();
include '../php-functions/get-books.fn.php';
include '../php-functions/get-reviews.fn.php';
if(isset($_GET['criticId'])){
	$criticId=$_GET['criticId'];
}
if(isset($_GET['bookId'])){
	$bookId=$_GET['bookId'];
	$_SESSION['bookId']=$bookId;
}

	unset($_SESSION['reviewId']);
	unset($_SESSION['review']);
	unset($_SESSION['stars']);
	unset($_SESSION['score']);
	unset($_SESSION['title']);

getReviews($bookId,$criticId);
//echo getReviews($bookId,$criticId); 

if(isset($_GET['title'])){
	$title=$_GET['title'];
	$_SESSION['title']=$title;
}
header('Location: ../admin.php?caller=reviews');





?>