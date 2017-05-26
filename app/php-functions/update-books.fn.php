

<?php
function updatebooks($aId,$bId,$title,$desc,$genre,$pages,$pubDat){
	
	include '../connect.php';
	$photopath='new.png';
	if($bId == 0){
		$stmt=$db->prepare("insert into `books`(title,description,genre,bookPhoto,pages,pubDat,authorId) values(?,?,?,?,?,?,?)");
		$stmt->bind_param('ssssisi',$title,$desc,$genre,$photopath,$pages,$pubDat,$aId);	
	}else{
		$stmt=$db->prepare("UPDATE `books` SET title=?,description=?,genre=?,pages=?,pubDat=? WHERE authorId=? and `books`.bookId=?");
		$stmt->bind_param('sssisii',$title,$desc,$genre,$pages,$pubDat,$aId,$bId);
	}
		$stmt->execute();
		$stmt->close();
}
?>
?>