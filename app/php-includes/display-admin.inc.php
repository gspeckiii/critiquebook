<?php
	if(isset($_GET['sign'])) {
			$sign=$_GET['sign'];

	if ($sign=='up'){
		echo '<div class="admin__form">
			<form  action="php-includes/insert-signup.inc.php" method="post">
			<table   border="1" cellpadding="5" cellspacing="0">
			<tr>
				<td style="width: 100;">Name:</td>
				<td style="width:90%;"><input style="width:90%;" type="text" name="criticName"></td>
			</tr>
			<tr>
				<td style="width: 100px;">Email:</td>
				<td style="width:90%;"><input style="width:90%;" type="text" name="criticEmail"></td>
			</tr>
			<tr>
				<td style="width: 100px;">Password:</td>
				<td style="width:90%;"><input style="width:90%;" type="Password" name="criticPswrd"></td>
			</tr>
			<tr>
				<td style="width: 100px;height: 200px;">Biography:</td>
				<td style="width: 90%;height: 200px;"><textarea name="criticBio" style="width:90%; height: 100%;"></textarea>
			</td>
			</tr>
			<tr>

				<td style="width: 100px;">Submit</td>
				<td><input style="width:125px;height: 25px;" type="submit" value="Submit Critic Form"></td>
			</tr>

				</table>
			</form>
			</div>';
	}
	elseif ($sign=='pro'){
				echo '<div class="admin__form">
			<form  action="php-includes/update-signup.inc.php" method="post">
			<table   border="1" cellpadding="5" cellspacing="0">
			<tr>
				<td style="width: 100;">Name:</td>
				<td style="width:90%;"><input style="width:90%;" type="text" name="criticName" Placeholder="'.$_SESSION['uName'].'"></td>
			</tr>
			<tr>
				<td style="width: 100px;">Email:</td>
				<td style="width:90%;"><input style="width:90%;" type="text" name="criticEmail" Placeholder="'.$_SESSION['uEmail'].'"></td>
			</tr>
			<tr>
				<td style="width: 100px;">Password:</td>
				<td style="width:90%;"><input style="width:90%;" type="Password" name="criticPswrd" Placeholder="'.$_SESSION['uPswrd'].'"></td>
			</tr>
			<tr>
				<td style="width: 100px;height: 200px;">Biography:</td>
				<td style="width: 90%;height: 200px;"><textarea name="criticBio" Placeholder="'.$_SESSION['uBio'].'" style="width:90%; height: 100%;"></textarea>
			</td>
			</tr>
			<tr>

				<td style="width: 100px;">Photo</td>
				<td>			</form>
				<form action="php-includes/upload.inc.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
			</form></td>
			</tr>
			<tr>

				<td style="width: 100px;">Update</td>
				<td><input style="width:125px;height: 25px;" type="submit" value="Update Critic Form"></td>
			</tr>

				</table>

			</div>';
		echo $_SESSION['uId'];
		echo	$_SESSION['uPhoto'];
			echo $_SESSION['uName'];
			echo $_SESSION['uBio'];
			echo $_SESSION['uEmail'];
	}


}?>

	<!--

	-->


<!--
<div class="admin__panel">
	<div class="wrapper">
		<div class="login">
			<form  action="display-prep.php" method="post">
			<table   border="1" cellpadding="5" cellspacing="0">
				<tr>
					<td style="width: 100px;">User email:</td>
					<td style="width:100px;"><input type="text" name="useremail"></td>
				</tr>
				<tr>
					<td style="width: 100px;">Password:</td>
					<td style="width:67px;"><input type="text" name="userpswrd"><input type="submit" value="Login" class="login__input"></td></td>
				</tr>
				<tr>	
				</tr>
			</table>
			</form>
		</div>	
	</div>
<?php


?>
</div>
-->