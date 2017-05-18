<?php
function displayReviews(){
	global $db,$criticsId,$authorsId,$genres;
	
	require_once 'index.php';
			$sql="SELECT `critics`.criticName,`t0`.authorName,
	 			`t0`.title,`t0`.description,`t0`.genre,`t0`.bookPhoto,`t0`.pages,`t0`.pubDat,
	  			`reviews`.review,`reviews`.stars,`reviews`.score,`reviews`.reviewId from 
	  			`reviews` inner join `critics` on `reviews`.criticId=`critics`.criticId 
	  			inner join  
	  			(select `books`.bookId,`authors`.authorName,`authors`.authorId,
	 			`books`.title,`books`.description,`books`.genre,`books`.bookPhoto,`books`.pages,`books`.pubDat
	 			from `books` inner join `authors` on
	  			`books`.authorId=`authors`.authorId) as t0
	  			on `reviews`.bookId=`t0`.bookId";

	  		if(isset($criticsId)){
	  			$sql.=" where `critics`.criticId = ?";
	  			$stmt=$db->prepare($sql);
	  			$stmt->bind_param('i', $criticsId);
	  		}
	  		elseif(isset($genres)){
	  			$sql.=" where `t0`.genre = ?";
	  			$stmt=$db->prepare($sql);
	  			$stmt->bind_param('s', $genres);
	  		}
	  		elseif(isset($authorsId)){
	  			$sql.=" where `t0`.authorId = ?";
	  			$stmt=$db->prepare($sql);
	  			$stmt->bind_param('i', $authorsId);
	  		}
	  		else{
	  			$stmt=$db->prepare($sql);
	  		}
			
			$stmt->bind_result($criticName,$authorName,$bookTitle,$bookDesc,$bookGenre,$bookPhoto,	
				$bookPages,$bookDate,$bookReview,$bookStars,$bookScore,$reviewId);
			$stmt->execute();
			

			$outputReviews="";
			while($stmt->fetch()){

				$photopath='assets/images/'.$bookPhoto;
				$outputReviews.= "<div class='row'>";
				$outputReviews.= "<div class='row__img'>";
				$outputReviews.= "<img class = 'row__img-stretch' src=".$photopath." alt='photo'>";
				$outputReviews.= "</div>";
				$outputReviews.= ' <div class="row__info">
						<h1><strong>'.$bookTitle.'</strong> by '.$authorName.'</h1>
						 <p>'.$bookDesc.'</p>
						 <p><strong>Genre: </strong>'.$bookGenre.'<strong> Pages: </strong>'.$bookPages.'<strong> Published: </strong>'.$bookDate.'</p>
	
						 <h2>'.$criticName.' critique</h2>
						 <p>'.$bookReview.'</p>
						 <p><strong>Stars: </strong>'.$bookStars.'<strong> Review score: </strong>'.$bookScore.'</p>
						
						</div>';

				$outputReviews.= "</div>";
	}		
	$stmt->close();	
	return($outputReviews);	
			

}


?>