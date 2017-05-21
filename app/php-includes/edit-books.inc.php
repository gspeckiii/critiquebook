
<?php
//SESSION_START();
$_SESSION['caller']='books';
$_SESSION['search']='';
echo '<div class="menu">
<form  action="" method="GET">
<label class="label-search" for= "search">  Search  Books and Authors </label><br><input class="input-search" type="text" id="search" name="search" />';
 
  
echo '<button class="button-search" type="submit">Search</button>
</form></div>';

if(isset($_GET['search'])) {
    $_SESSION['search']=$_GET['search'];
}

$results=search($_SESSION['search'],$_SESSION['caller']);
echo $results;
echo $_SESSION['caller'];
   if(isset($_GET['title'])){
       $title=$_GET['title']; 
   }else{$title="title";}
    if(isset($_GET['description'])){
       $description=$_GET['description']; 
   }else{$description="description";}
    if(isset($_GET['genre'])){
       $genre=$_GET['genre']; 
   }else{$genre="genre";}
    if(isset($_GET['bookPhoto'])){
       $bookPhoto=$_GET['bookPhoto']; 
   }else{$bookPhoto="";}
    if(isset($_GET['pages'])){
       $pages=$_GET['pages']; 
   }else{$pages=0;}
    if(isset($_GET['pubDat'])){
       $pubDat=$_GET['pubDat']; 
   }else{$pubDat="1/0/1900";}
//$pages=(int)$pages;

//$pubDat = date("d-m-Y", strtotime($pubDat));


echo '<div class="form">

<fieldset>
    <legend><h1>Books</h1></legend>
          <form action="php-includes/editBook.inc.php" method="POST">
    <label class="label" for="title"><strong>  Title  </strong></label><input class="form__short" type="text" id="title" name="title" value='.$title.' />
    <label class="label" for="genre" ><strong>  Genre  </strong></label><input class="form__short" type="text" id="genre" name="genre" value='.$genre.'/><br>
    <label class="label" for="description"><strong>  Description  </strong></label><textarea class="form__medium" type="text" id="desc" name="description">'.$description.'</textarea> <br>


     <label class="label" for="pubDat" ><strong>  Published  </strong></label><input class="form__short" type="date" id="bPub" name="pubDat" value="'.$pubDat.'"/>
     <label class="label" for="pages" ><strong>  Pages  </strong></label><input class="form__tiny" type="text" id="bPub" name="pages" value="'.$pages.'"/><br>
      

     		<button class="button" type="submit" name="submit">Save</button>
	</form>
     <label class="label" ><strong>  Photo Upload  </strong></label>
     <form action="php-includes/upload.inc.php" method="POST" enctype="multipart/form-data">
     	<input type="file" name="file">
		<button class="button" type="submit" name="submit">Upload</button>
	</form>
</fieldset>
</div>';
?>