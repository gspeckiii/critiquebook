<?php
	function search($str,$tbl){
		//include '../connect.php';
		global $db;

		$s = '%'. $str .'%';
		
		if ($tbl=='authors'){

			$stmt=$db->prepare("select * from `authors` where 
				`authors`.authorName like ?");
			$stmt->bind_param('s',$s);
			$stmt->bind_result($authorId,$authorName,$authorBio,$authorPhoto,$authorBorn,$authorDied);
			$stmt->execute();
	///////////////////////////////////////////////////////
			$output="<div class='search-results'>";
			while($stmt->fetch()){
				$authorName=htmlentities($authorName,ENT_QUOTES, "UTF-8");
				$authorBio=htmlentities($authorBio,ENT_QUOTES, "UTF-8");
				$authorBorn=htmlentities($authorBorn,ENT_QUOTES, "UTF-8");
				$authorPhoto=htmlentities($authorPhoto,ENT_QUOTES, "UTF-8");
				$authorDied=htmlentities($authorDied,ENT_QUOTES, "UTF-8");
				$output .= "<a href='admin.php?authorId=$authorId&authorName=$authorName&authorBio=$authorBio&$authorPhoto=$authorPhoto&authorBorn=$authorBorn&authorDied=$authorDied'>$authorName</a>";
			}
			$output.="</div>";

		}

		
	/////////////////////////////////////////////////////////
		if ($tbl=='books'){
			
			$stmt=$db->prepare("select distinct authorName, `authors`.authorId, bookId, title  from `authors` inner join `books` on
  			 `authors`.authorId=`books`.authorId where title like ? or description like ? or genre like ? or authorName like ? or authorBio like ? order by authorName
				");
			$stmt->bind_param('sssss',$s,$s,$s,$s,$s);
			$stmt->bind_result($authorName,$authorId,$bookId,$title);
			$stmt->execute();
	/////////////////////////////////////////////////////////
			$output="<div class='search-result'>";		
			while($stmt->fetch()){
				$authorName=htmlentities($authorName,ENT_QUOTES, "UTF-8");
				$title=htmlentities($title,ENT_QUOTES, "UTF-8");

				//if ($flag=='true'){
					//$i=$authorName;
					
				//}
				
			
				//if($i==$authorName){
					
					$output .= "<a href='php-includes/get-books.inc.php?bookId=$bookId&authorId=$authorId'> $authorName $title </a>";
				
				//}else{
					//$i=$authorName;
					//$output.="<div class='search-results-group' ".$out1. '</div>';
					//$out1="";
					//$i=$authorName;
					
				//}				
			}
			$output.="</div>";
		}
		
		$stmt->close();
		return($output);
		}

	/*

*/?>



