<?php

function updateReviews($reviewId,$criticId,$bookId,$stars,$review){
	include '../connect.php';
	$score=0;
	if($reviewId == 0){
		$stmt=$db->prepare("INSERT INTO `reviews`(criticId,bookId,stars,score,review) VALUES(?,?,?,?,?)");
		$stmt->bind_param('iiiis',$criticId,$bookId,$stars,$score,$review);	
	}else{
		$stmt=$db->prepare("UPDATE `reviews` SET stars=?,review=? WHERE reviewId=? and criticId=? and bookId=?");
		$stmt->bind_param('isiii',$stars,$review,$reviewId,$criticId,$bookId);
	}
		$stmt->execute();
		$stmt->close();
}
?>