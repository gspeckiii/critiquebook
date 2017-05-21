<?php
	function testCritics($name){
		include '../connect.php';


		$stmt=$db->prepare("select criticName from `critics` where criticName=?");
		$stmt->bind_param('s', $name);	
		$stmt->bind_result($criticName);
		$stmt->execute();
		$match=false;
		while($stmt->fetch()){
		$match=true;
		}
		$stmt->close();
		return($match);
}
?>