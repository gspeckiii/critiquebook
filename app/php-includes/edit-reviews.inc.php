<?php

$_SESSION['caller']='reviews';
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

    if(isset($_SESSION['review'])){
       $review=$_SESSION['review']; 
   }else{$review="";}
    if(isset($_SESSION['stars'])){
       $stars=$_SESSION['stars']; 
   }
       if(isset($_SESSION['reviewId'])){
       $reviewId=$_SESSION['reviewId']; 
   }else{$reviewId=0;}

     	if(isset($_SESSION['bookId'])){
       $bookId=$_SESSION['bookId']; 
   }else{$bookId=0;}


echo 

'<div class="form">
<fieldset>
    
    <legend><h1>Author: '.$_SESSION['authorName'].' - Book: '.$_SESSION['title'].'</h1></legend>
     <form action="php-includes/update-reviews.inc.php?bookId='.$bookId.'" method="GET" >
   
    <label class="label" for="review"><strong>  Review  </strong></label><textarea class="form__long" type="text" id="rev" name="review" />'.$review.'</textarea><br>
    <label class="label" for="stars"><strong>  Stars  </strong></label><input class="form__tiny" type="text" id="stars" name="stars" value="'.$stars.'"/>  

     	<button type="submit" name="reviewId" value="'.$reviewId.'">Save</button>
	</form>
</fieldset>
</div>'



      
?>


