
<?php

$_SESSION['caller']='authors';
$_SESSION['search']='';
echo '<div class="menu">
<form  action="" method="GET">
<label class="label-search" for= "search">  Search  Authors </label><br><input class="input-search" type="text" id="search" name="search" />';
 
	
echo '<button class="button-search" type="submit">Search</button>
</form></div>';
$results=search($_SESSION['search'],$_SESSION['caller']);
echo $results;


	if(isset($_GET['search'])) {
		$_SESSION['search']=$_GET['search'];
	}
	if(isset($_SESSION['authorId'])) {
		$authorId=$_SESSION['authorId'];
	}else{
		$authorId="";
	}
	if(isset($_SESSION['authorName'])) {
		$authorName=$_SESSION['authorName'];
	}else{
		$authorName="";
	}
	if(isset($_SESSION['authorBio'])) {
		$authorBio=$_SESSION['authorBio'];
	}else{
		$authorBio="";
	}
	if(isset($_SESSION['born'])) {
		$born=$_SESSION['born'];
	}else{
		$born="";
	}
	if(isset($_SESSION['died'])) {
		$died=$_SESSION['died'];

	}else{
		$died="";
	}


	


echo '<div class="form">
<fieldset>
    <legend><h1>Authors</h1></legend>
    <form action="php-includes/update-authors.inc.php" method="GET" >
    <label class="label" for="authorName"><strong>  Name of author  </strong></label><input class="form__short" type="text" id="aName" name="authorName" value="'.$authorName.'" />
    <label class="label" for="authorBorn"><strong>  Born  </strong></label><input class="form__short "type="date" id="aBorn" name="authorBorn" value="'.$born.'"/>
    <label class="label" for="authorDied" ><strong>  Died  </strong></label><input class="form__short" type="date" id="aDead" name="authorDied" value="'.$died.'"/><br>
     <label class="label" for="authorBio"><strong>  Biography  </strong></label><textarea class="form__long" type="text" id="aBio" name="authorBio" />'.$authorBio.'</textarea>
      <label class="label" ><strong>  Save record before attaching photo  </strong> </label>
      
     		<button class="button" type="submit" name="authorId" value="'.$authorId.'">Save</button>
	</form>

</fieldset>

</div><div class="form__upload">     <label class="label" ><strong>  Photo Upload  </strong></label>
     <form action="php-includes/upload.inc.php?caller=authors" method="POST" enctype="multipart/form-data">
     	<input type="file" name="file">
		<button class="button" type="submit" name="caller" value="authors">Upload</button>
	</form>';
	 $photopath="assets/images/authors/".$_SESSION['authorPhoto'];

      echo "<img class= 'header__img' src='".$photopath."'. alt='photo'></div>";



?>