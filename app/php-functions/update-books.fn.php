

<?php
function updatebooks($id,$title,$desc,$genre,$pages,$pubDate,$authorId){
	
	include '../connect.php';
	$photopath='new.png';
	if($id == 0){
		$stmt=$db->prepare("insert into `books` values(?,?,?,?,?,?)");
		$stmt->bind_param('issssisi'$id,$title,$desc,$genre,$photopath,$pages,$pubDate,$authorId);	
	}else{
		$stmt=$db->prepare("UPDATE `books` SET title=?,description=?,genre=?,pubDat=?,authorId=? WHERE `books`.bookId=?");
		$stmt->bind_param('sssisii',$title,$desc,$genre,$pages,$pubDate,$authorId,$id);
	}
		$stmt->execute();
		$stmt->close();
}
?>
?>