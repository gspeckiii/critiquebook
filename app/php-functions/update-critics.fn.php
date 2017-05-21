<?php

function updateCritics($id,$name,$bio,$email,$pswrd){
	include '../connect.php';
		$photopath='new.png';
	if($id == 0){
		$stmt=$db->prepare("INSERT INTO `critics` (criticName, criticBio, criticPhoto, criticEmail, criticPswrd) VALUES(?,?,?,?,?)");
		$stmt->bind_param('sssss', $name, $bio, $photopath, $email, $pswrd);	
	}else{

		$stmt=$db->prepare("UPDATE `critics` SET `critics`.criticName=?, `critics`.criticBio=?, `critics`.criticEmail=?,`critics`.criticPswrd=? WHERE `critics`.criticId=?");
		$stmt->bind_param('ssssi',$name,$bio,$email,$pswrd,$id);
	}
		$stmt->execute();
		$stmt->close();
}
?>

