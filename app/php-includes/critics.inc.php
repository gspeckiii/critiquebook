
	<div class="critic-content">
		<h1 class="critic-content__title">Meet the critics</h1>
		<div class="critic-content__img">

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
						 <a class="btn btn--black" href="index.php?critic_id='.$criticId.'; ?>">See all reviews</a>
						</div>';

				echo "</div>";
	}				
			?>
		</div>
	</div>
