<?php
//called in navigation.inc.php
function showAuthors(){
	global $db;
	$stmt=$db->prepare("select `authors`.authorId, `authors`.authorName from `authors`");
	$stmt->bind_result($authorId,$authorName);
	$stmt->execute();

	$output="<ul>";
	while($stmt->fetch()){
		$authorName=htmlentities($authorName,ENT_QUOTES, "UTF-8");
		$output .= "<li><a href='index.php?author_id=$authorId'>$authorName</a></li>";
	}
	$output.="</ul>";
	$stmt->close();
	return($output);
}
?>