<?php

//require_once 'connect.php';
function updatePhotopath($id,$filename,$caller){
	require_once '../connect.php';

		if ($caller=='authors'){
			$stmt=$db->prepare("UPDATE `authors` SET `authors`.authorPhoto=? 
			WHERE authorId=?");

			$stmt->bind_param('si',$filename,$id);
		}else if($caller=='critics'){
			$stmt=$db->prepare("UPDATE `critics` SET `critics`.criticPhoto=? 
				WHERE criticId=?");
			$stmt->bind_param('si',$filename,$id);
		}else if ($caller=='books'){
			$stmt=$db->prepare("UPDATE `books` SET bookPhoto=? 
				WHERE bookId=?");
			$stmt->bind_param('si',$filename,$id);
		}		
		$stmt->execute();
		$stmt->close();

}
?>