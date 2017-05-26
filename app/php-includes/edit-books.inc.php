
<?php
//SESSION_START();

$_SESSION['caller']='books';
$_SESSION['search']='';
echo '<div class="menu">
<form  action="" method="GET">
<label class="label-search" for= "search">  Search </label><br><input class="input-search" type="text" id="search" name="search" />';
 
  
echo '<button class="button-search" type="submit">Search</button>
</form></div>';

if(isset($_GET['search'])) {
    $_SESSION['search']=$_GET['search'];
}

$results=search($_SESSION['search'],$_SESSION['caller']);
echo $results;

   if(isset($_SESSION['title'])){
       $title=$_SESSION['title']; 
   }
    if(isset($_SESSION['description'])){
       $description=$_SESSION['description']; 
   }
    if(isset($_SESSION['genre'])){
       $genre=$_SESSION['genre']; 
   }
    if(isset($_SESSION['bookPhoto'])){
       $bookPhoto=$_SESSION['bookPhoto']; 
   }
    if(isset($_SESSION['pages'])){
       $pages=$_SESSION['pages']; 
   }
    if(isset($_SESSION['pubDat'])){
       $pubDat=$_SESSION['pubDat']; 
   }
    if(isset($_SESSION['authorName'])){
       $authorName=$_SESSION['authorName']; 
   }
//$pages=(int)$pages;

//$pubDat = date("d-m-Y", strtotime($pubDat));


echo '<div class="form">

<fieldset>
    <legend><h1> Books '.$authorName.' '.$title.'</h1></legend>
          <form action="php-includes/update-books.inc.php" method="GET">
    <label class="label" for="title"><strong>  Title  </strong></label><input class="form__short" type="text" id="title" name="title" value="'.$title.'" />
    <label class="label" for="genre" ><strong>  Genre  </strong></label><input class="form__short" type="text" id="genre" name="genre" value="'.$genre.'" /><br>
         <label class="label" for="pubDat" ><strong>  Published  </strong></label><input class="form__short" type="date" id="bPub" name="pubDat" value="'.$pubDat.'"/>
     <label class="label" for="pages" ><strong>  Pages  </strong></label><input class="form__tiny" type="text" id="bPub" name="pages" value="'.$pages.'"/><br>

    <label class="label" for="description"><strong>  Description  </strong></label><br><textarea class="form__long" type="text" id="desc" name="description">'.$description.'</textarea> <br>



      

     		<button class="button" type="submit" name="submit">Save</button>
	</form>

</fieldset>
</div><div class="form__upload"      <label class="label" ><strong>  Photo Upload  </strong></label>
     <form action="php-includes/upload.inc.php?caller=books" method="POST" enctype="multipart/form-data">
      <input type="file" name="file">
    <button class="button" type="submit" name="submit">Upload</button>
  </form>';
  $photopath="assets/images/books/".$_SESSION['bookPhoto'];

      echo "<img class= 'header__img' src='".$photopath."'. alt='photo'></div>";
     
      
?>