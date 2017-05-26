<?php
session_start();
include '../php-functions/get-books.fn.php';
include '../php-functions/get-authors.fn.php';
if(isset($_GET['flag'])){
	$flag=$_GET['flag'];	
}else{$flag="";}
if(isset($_GET['authorId'])){
	$_SESSION['authorId']=$_GET['authorId'];
}
if(isset($_GET['bookId'])){
	$_SESSION['bookId']=$_GET['bookId'];
}

if($flag=='clearBooks'){
	getAuthors($_SESSION['authorId']);
	unset($_SESSION['bookId']);
	unset($_SESSION['title']);
	unset($_SESSION['description']);
	unset($_SESSION['genre']);
	unset($_SESSION['bookPhoto']);
	unset($_SESSION['pages']);
	unset($_SESSION['pubDat']);
}else{
	getBooks($_SESSION['bookId'],$_SESSION['authorId']);
}
header('Location: ../admin.php?caller=books');

?>