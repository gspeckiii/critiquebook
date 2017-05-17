<?php
//called in navigation.inc.php
function showCritics(){
	global $db;
	$stmt=$db->prepare("select `critics`.criticId, `critics`.criticName from `critics`");
	$stmt->bind_result($criticId,$criticName);
	$stmt->execute();

	$output="<ul>";
	while($stmt->fetch()){
		$criticName=htmlentities($criticName,ENT_QUOTES, "UTF-8");
		$output .= "<li><a href='index.php?critic_id=$criticId'>$criticName</a></li>";
	}
	$output.="</ul>";
	$stmt->close();
	return($output);
}
?>