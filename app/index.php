<!DOCTYPE html> <!-- -->
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>CritiqueBook</title>
  <meta name="keywords" content="book,read,review,critique,literature,blog,reading">
  <meta name="description" content="Book reviews from avid readers who want to share some of their favorite stories">
 <!--Gulp automation uses postCSS & autoprefixer outputs to this temp folder-->
 <link rel="stylesheet" href="temp/styles/styles.css">
   <script src="/temp/scripts/Vendor.js"></script>
   <?php include('connect.php') ?>
</head>
<body>
<header>
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

	<p><a href="#" class="btn  btn--large">Become a critic.</a></p>

	</div>


</header>
<div class="intro">

</div>
<div class="intro__text">
	<div class="wrapper">
		<h1 class="intro__title" > Critique Book.</h1>
		<h2 class="intro__subtitle"> Stay in the fold.</h2>
		<p class="intro__desc">Find new stories and share your criticism.  </p>	
	</div>
</div>

	<div class="table-content">
		<div class="table-content__img">
			<?php 
			$sql="SELECT * FROM `critics` ORDER BY `criticName`";
			$critics=$db->query($sql);
			while($row=$critics->fetch_object()){
				$criticId=$row->criticId;
				$criticName=htmlentities($row->criticName, ENT_QUOTES,"UTF-8");
				$criticBio=htmlentities($row->criticBio, ENT_QUOTES,"UTF-8");
				$criticPhoto=htmlentities($row->criticPhoto, ENT_QUOTES,"UTF-8");
				$photopath='assets/images/'.$criticPhoto;
				echo "<div class='row'>";
				echo "<div class='row__img'>";
				echo "<img class = 'row__img-stretch' src=".$photopath." alt='photo'>";
				echo "</div>";
				echo ' <div class="row__info">
						<p><strong>'.$criticName.'</strong></p>
						 <p>'.$criticBio.'</p>
						</div>';
				echo "</div>";
	}				
			?>
		</div>
	</div>



</body>
</html>
