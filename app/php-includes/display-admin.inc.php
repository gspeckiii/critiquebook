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
	elseif ($sign=='p'){
				echo '<div class="admin__form">
				<td style="width: 100px;"> Upload a 300px X 300px profile photo</td>
				
				<form action="php-includes/upload.inc.php?caller=critics method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<button type="submit" name="submit">Save</button>
			</form>
			<form  action="php-includes/update-critic.inc.php" method="post">
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
				<td style="width: 100px;">Update</td>
				<td><input style="width:125px;height: 25px;" type="submit" value="Update Critic Form"></td>
			</tr>
				</table>
			</div>';
	}
	elseif ($sign=='a'){	
		require_once 'edit-authors.inc.php';
		require_once 'search.inc.php';
		}	
	}

		?>










	<!--

	-->


<!--
