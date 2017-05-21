<?php
	if (isset($_SESSION['bookId'])){
		$bookId=$_SESSION['bookId'];
	}elseif(isset($_GET['bookId'])){
		$bookId=$_GET['bookId'];
	}

	if (isset($_SESSION['title'])){
		$title=$_SESSION['title'];
	}elseif(isset($_GET['title'])){
		$title=$_GET['title'];
	}
	if (isset($_SESSION['description'])){
		$description=$_SESSION['description'];
	}elseif(isset($_GET['description'])){
		$description=$_GET['description'];
	}
	if (isset($_SESSION['genre'])){
		$genre=$_SESSION['genre'];
	}elseif(isset($_GET['genre'])){
		$genre=$_GET['genre'];
	}
	if (isset($_SESSION['pages'])){
		$pages=$_SESSION['pages'];
	}elseif(isset($_GET['pages'])){
		$pages=$_GET['pages'];
	}

	if (isset($_SESSION['pubDat'])){
		$pubDat=$_SESSION['pubDat'];
	}elseif(isset($_GET['pubDat'])){
		$pubDat=$_GET['pubDat'];
	}
	if (isset($_SESSION['authorId'])){
		$authorId=$_SESSION['authorId'];
	}elseif(isset($_GET['authorId'])){
		$authorId=$_GET['authorId'];
	}

	include '../php-functions/update-books.fn.php';
		updateBooks($authorId,$authorName,$authorBio,$authorBorn,$authorDied);


	$urlStr='Location: ../admin.php?caller=books'
	header($urlStr);
?>
?>