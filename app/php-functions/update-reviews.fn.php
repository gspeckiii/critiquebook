<?php

function updateReviews($reviewId,$criticId,$bookId,$stars,$score,$review){
	include '../connect.php';

	if($reviewId == 0){
		$stmt=$db->prepare("INSERT INTO `reviews` VALUES(?,?,?,?,?)");
		$stmt->bind_param('iiiis',$criticId,$bookId,$stars,$score,$review);	
	}else{
		$stmt=$db->prepare("UPDATE `reviews` SET stars=?,score=?,review=? WHERE reviewId=? and criticId=? and bookId=?");
		$stmt->bind_param('iisiii',$stars,$score,$review,$reviewId,$criticId,$bookId);
	}
		$stmt->execute();
		$stmt->close();
}
?>