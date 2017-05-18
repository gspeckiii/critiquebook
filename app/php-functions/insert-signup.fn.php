<?php
	function insertCritic(){
		include('../connect.php');
		include 'insert-signup.inc.php';
		$stmt=$db->prepare("INSERT INTO `critics` (criticName, criticBio, criticPhoto, criticEmail, criticPswrd) VALUES(?,?,?,?,?)");
		$stmt->bind_param('sssss', $criticName, $criticBio, $criticPhoto, $criticEmail, $criticPswrd);
		$stmt->execute();
		$stmt->close();
		
	}
