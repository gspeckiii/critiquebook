<?php
include '../php-functions/get-books.fn.php';

if(isset($_GET['authorId'])){
	$_SESSION['authorId']=$_GET['authorId'];
}
if(isset($_GET['bookId'])){
	$_SESSION['bookId']=$_GET['bookId'];
}

getBooks($_SESSION['bookId'],$_SESSION['authorId']);


			$urlStr='Location: ../admin.php?caller=books&title='.$_SESSION['title'].'&description='.$_SESSION['description'].'&genre='.$_SESSION['genre'].'&bookPhoto='.$_SESSION['bookPhoto'].'&pages='.$_SESSION['pages'].'&pubDat='.$_SESSION['pubDat'].'&bookId='.$_SESSION['bookId'].'&authorId='.$_SESSION['authorId'];
			
header($urlStr);

?>