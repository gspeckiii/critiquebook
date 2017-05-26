<?php
session_start();
include '../php-functions/get-authors.fn.php';

if(isset($_GET['authorId'])){
	$_SESSION['authorId']=$_GET['authorId'];
}
	$_SESSION['title']="";
	$_SESSION['description']="";
	$_SESSION['genre']="";
	$_SESSION['bookPhoto']="";
	$_SESSION['pages']="";
	$_SESSION['pubDat']="";
getAuthors($_SESSION['authorId']);	
header('Location: ../admin.php?caller=authors');

?>