
<?php
	include 'connect.php'
	if (isset($_POST['useremail'])){
		$useremail=$_POST['useremail'];
	}
	if (isset($_POST['password'])){
		$userpswrd=$_POST['password'];
	}

	$sql="SELECT * FROM 	`reviews` 	
	WHERE `criticEmail`='$userEmail' && `criticPswrd`='$useremail'
	order by review_id desc"
	$result=$db->query($sql);
	?>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr style="text-align:left;">
		<th style="width:100px;">criticId</th>
		<th style="width:150px";>criticName</th>
		<th style="width:150px";>criticBio</th>
		<th style="width:150px";>criticEmail</th>
		<th style="width:150px";>criticPassword</th>

	</table>

