<?php
$dbConnect=array(
	'server'=>'localhost',
	'user'=>'root',
	'pass'=>'',
	'name'=>'critiquebook'
	);
//create instance of class and assign it to $db object
$db=new mysqli($dbConnect['server'],
		$dbConnect['user'],
		$dbConnect['pass'],
		$dbConnect['name']
		);


?>