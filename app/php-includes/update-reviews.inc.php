<?php
session_start();
include '../php-functions/update-reviews.fn.php';
if(isset($_GET['reviewId'])){
	$reviewId=$_GET['reviewId'];
	$_SESSION['reviewId']=$reviewId;

}else{$reviewId=0;}
if(isset($_SESSION['bookId'])){
	$bookId=$_SESSION['bookId'];
}
if(isset($_GET['stars'])){
	$stars=$_GET['stars'];
	$_SESSION['stars']=$stars;
}
if(isset($_GET['review'])){
	$review=$_GET['review'];
	$_SESSION['review']=$review;
}
if(isset($_SESSION['uId'])){
	$criticId=$_SESSION['uId'];
}

updateReviews($reviewId,$criticId,$bookId,$stars,$review);

header('Location: ../admin.php?caller=reviews');
?>