<?php

function updateAuthors($id,$name,$bio,$born,$died){
	
	include '../connect.php';
	$photopath='new.png';
	if($id == 0){
		$stmt=$db->prepare("insert into `authors` values(?,?,?,?,?)");
		$stmt->bind_param('sssss',$name,$bio,$photopath,$born,$died);	
	}else{
		$stmt=$db->prepare("UPDATE `authors` set authorName=?, authorBio=?, born=?, died=? where 
			authorId=?");
		$stmt->bind_param('ssssi',$name,$bio,$born,$died,$id);
	}
		$stmt->execute();
		$stmt->close();
}
?>