<?php
//called in navigation.inc.php
function showGenre(){
	global $db;
	$stmt=$db->prepare("select distinct `books`.genre from `books`");
	$stmt->bind_result($genre);
	$stmt->execute();

	$output="<div class='dropdown-content'>";
	while($stmt->fetch()){
		$genre=htmlentities($genre,ENT_QUOTES, "UTF-8");
		$output .= "<a href='index.php?genre=$genre'>$genre</a>";
	}
	$output.="</div>";
	$stmt->close();
	return($output);
}
?>