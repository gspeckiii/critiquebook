<?php

	function getBooks($bId,$aId){

		include '../connect.php';
		$stmt=$db->prepare("select * from `books` where authorId=? and bookId=?");
		$stmt->bind_param('ii',$aId,$bId);
		$stmt->bind_result($bookId,$title,$description,$genre,$bookPhoto,$pages,$pubDat,$authorId);
		$stmt->execute();
		while($stmt->fetch()){

			$_SESSION['title']=$title;

			$_SESSION['description']=$description;
			$_SESSION['genre']=$genre;
			$_SESSION['bookPhoto']=$bookPhoto;
			$_SESSION['pages']=$pages;
			$_SESSION['pubDat']=$pubDat;
		}
		$stmt->close();
	}
	
?>