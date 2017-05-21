<?php
echo '<div class="menu">

     <label class="label-search" ><strong>  Photo Upload  </strong></label>
     <form action="php-includes/upload.inc.php?caller=critics" method="POST" enctype="multipart/form-data">
     	<input type="file" name="file">
		<button class="button" type="submit" name="caller" value="critics">Upload</button>
	</form>';

	$_SESSION['caller']='critics';
	if(isset($_SESSION['uId'])) {
		$criticId=$_SESSION['uId'];
	}
	if(isset($_SESSION['uName'])) {
		$criticName=$_SESSION['uName'];
	}
	if(isset($_SESSION['uBio'])){
		$criticBio=$_SESSION['uBio'];
	}
	if(isset($_SESSION['uEmail'])){
		$criticEmail=$_SESSION['uEmail'];
	}
	if(isset($_SESSION['uPswrd'])){
		$criticPswrd=$_SESSION['uPswrd'];
	}


echo'</div>
<div class="form">
<fieldset>
    <legend><h1>Critics</h1></legend>
    <form action="php-includes/update-critics.inc.php" method="POST" >
    <label class="label" for="criticName"><strong>  Name  </strong></label><input class="form__short" type="text" id="cName" name="criticName" value="'.$criticName.'" />

    <label class="label" for="criticEmail"><strong>  Email  </strong></label><input class="form__short "type="text" id="cEmail" name="criticEmail" value="'.$criticEmail.'"/>

    <label class="label" for="criticPsrd" ><strong>  Password  </strong></label><input class="form__short" type="Password" id="cPswrd" name="criticPswrd" value="'.$criticPswrd.'"/><br>

     <label class="label" for="criticBio"><strong>  Biography  </strong></label><textarea class="form__long" type="text" id="cBio" name="criticBio" />'.$criticBio.'</textarea>


     		<button class="button" type="submit" name="criticId" value="'.$criticId.'">Save</button>
	</form>

</fieldset>
</div>';
	if(isset($_GET['error'])) {
		$error=$_GET['error'];
		if ($error=='Namedup'){
			echo '<div class="error" <h1> Choose a different name '. $criticName.' is taken</h1></div>';
		}
	}
?>