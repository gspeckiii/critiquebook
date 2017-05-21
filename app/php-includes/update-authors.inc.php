<?php
	$i=(0);
	if(isset($_GET['authorName'])) {
		$authorName=$_GET['authorName'];
		$_SESSION['authorName']=$_GET['authorName'];
		$array[$i]='authorName='.$authorName.'&';
		$i++;
	}
	if(isset($_GET['authorId'])) {
		$authorId=$_GET['authorId'];
		$_SESSION['authorId']=$_GET['authorId'];
		$array[$i]='authorId='.$authorId.'&';
		$i++;
	}
	if(isset($_GET['authorBio'])) {
		$authorBio=$_GET['authorBio'];
		$_SESSION['authorBio']=$_GET['authorBio'];
		$array[$i]='authorBio='.$authorBio.'&';
		$i++;
	}
	if(isset($_GET['authorBorn'])) {
		$authorBorn=$_GET['authorBorn'];
		$array[$i]='authorBorn='.$authorBorn.'&';
		$_SESSION['authorBorn']=$_GET['authorBorn'];
		$i++;
	}
	if(isset($_GET['authorDied'])) {
		$authorDied=$_GET['authorDied'];
		$array[$i]='authorDied='.$authorDied.'&';
		$_SESSION['authorDied']=$_GET['authorDied'];
		$i++;
	}
	


		include '../php-functions/update-authors.fn.php';
		updateAuthors($authorId,$authorName,$authorBio,$authorBorn,$authorDied);
$urlStr=$array[0].$array[1].$array[2].$array[3].$array[4];
echo $urlStr;
	/*foreach($array[$i] as ){
		$urlStr=$urlStr . $array[$i];
		$i=$i-1;
		echo $urlStr;
	}
	echo $urlStr;
	$urlStr=htmlentities($urlStr,ENT_QUOTES, "UTF-8");
	echo $urlStr;
	
	echo $urlStr;*/
	$urlStr='Location: ../admin.php?'.$urlStr;
	header($urlStr);

?>