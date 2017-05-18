<?php
session_start();
$criticName=$_POST['criticName'];
$criticPswrd=$_POST['criticPswrd'];
		include('../connect.php');
	
		$stmt=$db->prepare("select * from `critics` where `critics`.criticName=? and `critics`.criticPswrd=?");
		$stmt->bind_param('ss', $criticName, $criticPswrd);
		$stmt->bind_result($Id,$Name,$Bio,$Photo,$Email,$Pswrd);
		$stmt->execute();
		$num=0;
		while($stmt->fetch()){
			$userId=$Id;
			$userName=$Name;
			$userBio=$Bio;
			$userPhoto=$Photo;
			$userEmail=$Email;
			$userPswrd=$Pswrd;
			$num+=1;
		}
		echo $num;
		if($num==0){
			echo "user name and password are wrong";
		}else{
			$_SESSION['uId']=$userId;
			$_SESSION['uPhoto']=$userPhoto;
			$_SESSION['uName']=$userName;
			$_SESSION['uBio']=$userBio;
			$_SESSION['uEmail']=$userEmail;
			$_SESSION['uPswrd']=$userPswrd;
		}
		$stmt->close();
		header("Location: ../index.php");


?>