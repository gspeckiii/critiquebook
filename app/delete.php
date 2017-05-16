<?php
	include 'connect.php';
	if (isset($_GET['criticId'])) {
	    $criticId = $_GET['criticId'];
	}


	$stmt=$db->prepare("DELETE FROM `critics` WHERE `criticId` = ?");
	$stmt->bind_param('i', $criticId);
	$stmt->execute();
	$stmt->close();
	header("Location: adminCritics.php");
	?>