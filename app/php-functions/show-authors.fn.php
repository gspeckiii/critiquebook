<?php
//called in navigation.inc.php
function showAuthors(){
	global $db;
	$stmt=$db->prepare("select `authors`.authorId, `authors`.authorName from `authors`");
	$stmt->bind_result($authorId,$authorName);
	$stmt->execute();

	$output="<div class='dropdown-content'>";
	while($stmt->fetch()){
		$authorName=htmlentities($authorName,ENT_QUOTES, "UTF-8");
		$output .= "<a href='index.php?author_id=$authorId'>$authorName</a>";
	}
	$output.="</div>";
	$stmt->close();
	return($output);
}
?>