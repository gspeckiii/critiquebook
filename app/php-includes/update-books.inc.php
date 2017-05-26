<?php
session_start();
include '../php-functions/update-books.fn.php';
	if(isset($_SESSION['bookId'])){
		$bookId=$_SESSION['bookId'];
	}else{$bookId=0;}
	if(isset($_SESSION['authorId'])){
		$authorId=$_SESSION['authorId'];
	}

	if(isset($_GET['title'])){
		$title=$_GET['title'];
		$_SESSION['title']=$title;
	}
	if(isset($_GET['description'])){
		$description=$_GET['description'];
		$_SESSION['description']=$description;
	}
	if(isset($_GET['genre'])){
		$genre=$_GET['genre'];
		$_SESSION['genre']=$genre;
	}
	if(isset($_GET['pages'])){
		$pages=$_GET['pages'];
		$_SESSION['pages']=$pages;
	}

	if(isset($_GET['pubDat'])){
		$pubDat=$_GET['pubDat'];
		$_SESSION['pubDat']=$pubDat;
	}

	//echo $pages;
		updateBooks($authorId,$bookId,$title,$description,$genre,$pages,$pubDat);
	header('Location: ../admin.php?caller=books');

?>