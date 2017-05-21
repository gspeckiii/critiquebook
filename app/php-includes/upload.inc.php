<?php
session_start();
if(isset($_POST['caller'])){
	$caller=$_POST['caller'];
}

if(isset($_SESSION['caller'])){
	$caller=$_SESSION['caller'];
}

	if ($caller=='critics'){
		$path='../assets/images/critics/';
		$dest="Location: ../admin.php?caller=critics";
		if(isset($_SESSION['uId'])){
			$id=$_SESSION['uId'];
		}
	}elseif($caller=='authors'){
		$path='../assets/images/authors/';
		$dest="Location: ../admin.php?caller=authors";
		if(isset($_SESSION['authorId'])){
			$id=$_SESSION['authorId'];
		}

		}elseif($caller=='books'){
		$path='../assets/images/books/';
		$dest="Location: ../admin.php?caller=books";
		if(isset($_SESSION['bookId'])){
			$id=$_SESSION['bookId'];
		}

	}


require_once '../php-functions/upload.fn.php';
	if(isset($caller) && isset($id)){
		$file=$_FILES['file'];
		$fileName=$_FILES['file']['name'];
		$fileTmpName=$_FILES['file']['tmp_name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];

		$fileExt = explode('.',$fileName);
		$fileActualExt=strtolower(end($fileExt));

		$allowed=array('jpg','jpeg','png');

		if(in_array($fileActualExt,$allowed)){
			if($fileError===0){
				if($fileSize<1000000){
					//$fileNewName=uniqid('',true).".".$fileActualExt;
					$fileNewName=$id.".".$fileActualExt;
					$fileDestination=$path.$fileNewName;
					
					move_uploaded_file($fileTmpName, $fileDestination);
						//echo gettype($id);
						$id=(int)$id;
						//echo gettype($id);
					updatePhotopath($id,$fileNewName,$caller);
					$_SESSION['uPhoto']=$fileNewName;
					
					header($dest);
				}else{
					echo "file to large";
				}
			}else{
				echo "Error in upload";
			}
		}else{
			echo "Cant upload files of this type";
		}
	}

?>