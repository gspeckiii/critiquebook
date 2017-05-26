<?php
	session_start();
	include '../php-functions/update-authors.fn.php';
	if(isset($_GET['authorName'])) {
		$authorName=$_GET['authorName'];
		$_SESSION['authorName']=$_GET['authorName'];

	}
	if(isset($_GET['authorId'])) {
		$authorId=$_GET['authorId'];
		$_SESSION['authorId']=$_GET['authorId'];

	}
	if(isset($_GET['authorBio'])) {
		$authorBio=$_GET['authorBio'];
		$_SESSION['authorBio']=$_GET['authorBio'];
		
	}
	if(isset($_GET['authorBorn'])) {
		$authorBorn=$_GET['authorBorn'];
		$_SESSION['authorBorn']=$_GET['authorBorn'];
		
	}
	if(isset($_GET['authorDied'])) {
		$authorDied=$_GET['authorDied'];
		$_SESSION['authorDied']=$_GET['authorDied'];
	
	}
	updateAuthors($authorId,$authorName,$authorBio,$authorBorn,$authorDied);

	$urlStr='Location: ../admin.php?caller=authors';
	header($urlStr);

?>