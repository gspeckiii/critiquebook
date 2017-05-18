<?php
		function displayCritics(){
			global $db,$criticsId,$authorsId,$genres;
			require_once 'index.php';

			$sql="SELECT distinct `critics`.criticId,`critics`.criticName,`critics`.criticBio,`critics`.criticPhoto
				from `reviews` inner join `critics` on `reviews`.criticId=`critics`.criticId 
	  			inner join  
	  			(select `books`.bookId,`authors`.authorName,`authors`.authorId,
	 			`books`.title,`books`.description,`books`.genre,`books`.bookPhoto,`books`.pages,`books`.pubDat
	 			from `books` inner join `authors` on
	  			`books`.authorId=`authors`.authorId) as t0
	  			on `reviews`.bookId=`t0`.bookId";
	  		if(isset($criticsId)){
	  			$sql="SELECT distinct `critics`.criticId,`critics`.criticName,`critics`.criticBio,`critics`.criticPhoto from `critics`  where `critics`.criticId = ?";
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
	  		$outputCritic="";
	  		$stmt->bind_result($criticId,$criticName,$criticBio,$criticPhoto);
			$stmt->execute();
			/*If($stmt->num_rows>0) {*/


				while($stmt->fetch()){
					

					$photopath='assets/images/critics/'.$criticPhoto;
					$outputCritic="";
					$outputCritic.= "<div class='row'>";
					$outputCritic.= "<div class='row__img'>";
					$outputCritic.= "<img class = 'row__img-stretch' src=".$photopath." alt='photo'>";
					$outputCritic.= "</div>";
					$outputCritic.= ' <div class="row__info">
							<p><strong>'.$criticName.'</strong></p>
							 <p>'.$criticBio.'</p>
							 <a class="btn btn--black" href="index.php?critic_id='.$criticId.'; ?>">See all reviews</a>
							</div>';

					$outputCritic.= "</div>";
				}
			/*}*/
	
				$stmt->close();
				return($outputCritic);	
		}	
				
			?>