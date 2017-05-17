	<div class="reviews-content">
	<h1 class="critic-content__title">Checkout some reviews...</h1>
		<div class="reviews-content__img">
			<?php 
			 require_once 'index.php';
			 echo $critic_id;
			$stmt=$db->prepare("SELECT `critics`.criticName,`t0`.authorName,
	 			`t0`.title,`t0`.description,`t0`.genre,`t0`.bookPhoto,`t0`.pages,`t0`.pubDat,
	  			`reviews`.review,`reviews`.stars,`reviews`.score,`reviews`.reviewId from 
	  			`reviews` inner join `critics` on `reviews`.criticId=`critics`.criticId 
	  			inner join  
	  			(select `books`.bookId,`authors`.authorName,
	 			`books`.title,`books`.description,`books`.genre,`books`.bookPhoto,`books`.pages,`books`.pubDat
	 			from `books` inner join `authors` on
	  			`books`.authorId=`authors`.authorId) as t0
	  			on `reviews`.bookId=`t0`.bookId
	  			where `critics`.criticId = ?");
			$stmt->bind_param('i', $critic_id);
			$stmt->bind_result($criticName,$authorName,$bookTitle,$bookDesc,$bookGenre,$bookPhoto,	
				$bookPages,$bookDate,$bookReview,$bookStars,$bookScore,$reviewId);
			$stmt->execute();
			


			while($stmt->fetch()){

				$photopath='assets/images/'.$bookPhoto;
				echo "<div class='row'>";
				echo "<div class='row__img'>";
				echo "<img class = 'row__img-stretch' src=".$photopath." alt='photo'>";
				echo "</div>";
				echo ' <div class="row__info">
						<h1><strong>'.$bookTitle.'</strong> by '.$authorName.'</h1>
						 <p>'.$bookDesc.'</p>
						 <p><strong>Genre: </strong>'.$bookGenre.'<strong> Pages: </strong>'.$bookPages.'<strong> Published: </strong>'.$bookDate.'</p>
	
						 <h2>'.$criticName.' critique</h2>
						 <p>'.$bookReview.'</p>
						 <p><strong>Stars: </strong>'.$bookStars.'<strong> Review score: </strong>'.$bookScore.'</p>
						
						</div>';

				echo "</div>";
	}		
	$stmt->close();		
			?>
		</div>
	</div>
