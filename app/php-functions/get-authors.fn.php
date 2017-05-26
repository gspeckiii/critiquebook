<?php

	function getAuthors($aId){

		include '../connect.php';
		$stmt=$db->prepare("select * from `authors` where authorId=?");
		$stmt->bind_param('i',$aId);
		$stmt->bind_result($authorId,$authorName,$authorBio,$authorPhoto,$born,$died);
		$stmt->execute();
		while($stmt->fetch()){

			$_SESSION['authorName']=$authorName;
			$_SESSION['authorBio']=$authorBio;
			$_SESSION['authorPhoto']=$authorPhoto;
			$_SESSION['born']=$born;
			$_SESSION['died']=$died;
		}
		$stmt->close();
	}
	
?>