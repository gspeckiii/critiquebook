

	<div class="header__log">
	<?php
		if (isset($_SESSION['uId'])){

			$photopath="assets/images/critics/".$_SESSION['uPhoto'];

			echo "<img class= 'header__img' src='".$photopath."'. alt='photo'>";
			echo "<p>".$_SESSION['uName']."</p>";
			echo"<form  action='php-includes/admin-logout.inc.php'><input class='header__logout' style='width:60px;height: 60px;' type='submit' value='Logout'>
		</form>";
		echo '</form>	<div class="dropdown__admin">
			  <button class="dropbtn">Add Content</button>
			  <div class="dropdown-content">
			  	
			  	<a href="admin.php?sign=add">Add review</a>
			  	<a href="admin.php?sign=pro">Update Profile</a>
			  	<a href="admin.php?sign=rev">Update review</a>
				</div>

			</div>';
		}else{
			echo '<form action="php-includes/admin-login.inc.php" method="post"><input style="width:180px; height: 30px;" type="text" name="criticName" Placeholder="Critic name"><br>
			<input style="width:180px; height: 30px;" type="Password" name="criticPswrd" Placeholder="Critic password"><br>
			<input class="header__logout" style="width:60px;height: 60px;" type="submit" value="Login"><h2><a href="admin.php?sign=up">Sign up</a></h2>';



		}?>
	</div>








 


