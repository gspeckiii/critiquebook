<?php
function getReviews($bId,$cId){
	include '../connect.php';
		$stmt=$db->prepare("select * from `reviews` where criticId=? and bookId=?");
		$stmt->bind_param('ii',$cId,$bId);
		$stmt->bind_result($reviewId,$criticId,$bookId,$stars,$score,$review);
		$stmt->execute();
		while($stmt->fetch()){

			$_SESSION['reviewId']=$reviewId;
			$_SESSION['stars']=$stars;
			$_SESSION['review']=$review;
			$_SESSION['score']=$score;
			
		}
		$stmt->close();
		
}
?>