	<div class="reviews-content">
	<h1 class="critic-content__title">Checkout some reviews...</h1>
		<div class="reviews-content__img">
			<?php 
			$sql="SELECT `critics`.criticName,`t0`.authorName,
	 			`t0`.title,`t0`.description,`t0`.genre,`t0`.bookPhoto,`t0`.pages,`t0`.pubDat,
	  			`reviews`.review,`reviews`.stars,`reviews`.score,`reviews`.reviewId from 
	  			`reviews` inner join `critics` on `reviews`.criticId=`critics`.criticId 
	  			inner join  
	  			(select `books`.bookId,`authors`.authorName,
	 			`books`.title,`books`.description,`books`.genre,`books`.bookPhoto,`books`.pages,`books`.pubDat
	 			from `books` inner join `authors` on
	  			`books`.authorId=`authors`.authorId) as t0
	  			on `reviews`.bookId=`t0`.bookId";
			$reviews=$db->query($sql);
			while($row=$reviews->fetch_object()){
				$reviewId=$row->reviewId;
				$authorName=htmlentities($row->authorName, ENT_QUOTES,"UTF-8");
				$criticName=htmlentities($row->criticName, ENT_QUOTES,"UTF-8");
				$bookTitle=htmlentities($row->title, ENT_QUOTES,"UTF-8");
				$bookDesc=htmlentities($row->description, ENT_QUOTES,"UTF-8");
				$bookGenre=htmlentities($row->genre, ENT_QUOTES,"UTF-8");
				$bookPhoto=htmlentities($row->bookPhoto, ENT_QUOTES,"UTF-8");
				$bookPages=htmlentities($row->pages, ENT_QUOTES,"UTF-8");
				$bookDate=htmlentities($row->pubDat, ENT_QUOTES,"UTF-8");
				$bookReview=htmlentities($row->review, ENT_QUOTES,"UTF-8");
				$bookStars=htmlentities($row->stars, ENT_QUOTES,"UTF-8");
				$bookScore=htmlentities($row->score, ENT_QUOTES,"UTF-8");
				
				



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
			?>
		</div>
	</div>
