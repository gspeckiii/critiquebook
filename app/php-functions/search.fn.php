<?php
	function search($str,$tbl){
		//include '../connect.php';
		 if(isset($_SESSION['uId'])){
       $criticId=$_SESSION['uId']; 
   }
		global $db;

		$s = '%'. $str .'%';
		
		if ($tbl=='authors'){

			$stmt=$db->prepare("select * from `authors` where 
				`authors`.authorName like ?");
			$stmt->bind_param('s',$s);
			$stmt->bind_result($authorId,$authorName,$authorBio,$authorPhoto,$authorBorn,$authorDied);
			$stmt->execute();
	///////////////////////////////////////////////////////
			$output="<div class='search-result'><ul class='sub1'>";
			while($stmt->fetch()){
				$authorName=htmlentities($authorName,ENT_QUOTES, "UTF-8");
				$authorBio=htmlentities($authorBio,ENT_QUOTES, "UTF-8");
				$authorBorn=htmlentities($authorBorn,ENT_QUOTES, "UTF-8");
				$authorPhoto=htmlentities($authorPhoto,ENT_QUOTES, "UTF-8");
				$authorDied=htmlentities($authorDied,ENT_QUOTES, "UTF-8");
				$output .= "<li> <a href='php-includes/get-authors.inc.php?&authorId=$authorId'>$authorName</a></li>";
			}
			$output.="</ul></div>";

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
			$output="<div class='search-result'><ul class='sub1'>";		
			$lastAuthor="";
			$start=0;
			while($stmt->fetch()){
				$authorName=htmlentities($authorName,ENT_QUOTES, "UTF-8");
				$title=htmlentities($title,ENT_QUOTES, "UTF-8");
				
				if ($lastAuthor==$authorName){
					$flag=1;
				}else{
					$flag=0;
					if($start!=0){
						$output.="</ul>";
					}else{
						$start=1;
					}
					
					
				}
				if ($flag==0){
					
					$output.="<li> <a href='php-includes/get-books.inc.php?authorId=$authorId&flag=clearBooks'> $authorName</a><ul class='sub2'><li><a href='php-includes/get-books.inc.php?bookId=$bookId&authorId=$authorId'> $title </a></li>";
				}
							
				if($flag==1){
					
					$output .= "<li><a href='php-includes/get-books.inc.php?bookId=$bookId&authorId=$authorId'> $title </a></li>";
				}
				$lastAuthor=$authorName;			
			}
			$output.="</ul></ul></div>";
		}
		if ($tbl=='reviews'){

			
			$stmt=$db->prepare("select distinct authorName, `authors`.authorId, bookId, title  from `authors` inner join `books` on
  			 `authors`.authorId=`books`.authorId where title like ? or description like ? or genre like ? or authorName like ? or authorBio like ? order by authorName
				");
			$stmt->bind_param('sssss',$s,$s,$s,$s,$s);
			$stmt->bind_result($authorName,$authorId,$bookId,$title);
			$stmt->execute();
	/////////////////////////////////////////////////////////
			$output="<div class='search-result'><ul class='sub1'>";		
			$lastAuthor="";
			$start=0;
			while($stmt->fetch()){
				$authorName=htmlentities($authorName,ENT_QUOTES, "UTF-8");
				$title=htmlentities($title,ENT_QUOTES, "UTF-8");
				
				if ($lastAuthor==$authorName){
					$flag=1;
				}else{
					$flag=0;
					if($start!=0){
						$output.="</ul>";
					}else{
						$start=1;
					}
					
					
				}
				if ($flag==0){
					
					$output.="<li> <a href='#'> $authorName</a><ul class='sub2'><li><a href='php-includes/get-reviews.inc.php?bookId=$bookId&criticId=$criticId&title=$title'> $title </a></li>";
				}
							
				if($flag==1){
					
					$output .= "<li><a href='php-includes/get-reviews.inc.php?bookId=$bookId&criticId=$criticId&title=$title'> $title </a></li>";
				}
				$lastAuthor=$authorName;			
			}
			$output.="</ul></ul></div>";
		}
		$stmt->close();
		return($output);
	}

	/*

*/?>



