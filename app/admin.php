
<?php

set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');
require_once 'head.inc.php';
//functions
require_once 'show-authors.fn.php';
require_once 'test-critics.fn.php';
require_once 'show-critics.fn.php';
require_once 'show-genre.fn.php';
require_once 'search.fn.php';
require_once 'upload.fn.php';
require_once 'update-critics.fn.php';
require_once 'test-critics.fn.php';
require_once 'update-authors.fn.php';
require_once 'get-books.fn.php';
//included

require_once 'get-variables.inc.php';


?>
<header class="admin">

</header>
<body>

<?php

require_once 'header.inc.php';

$caller="";
/**/

	if(isset($_SESSION['caller'])){

	$caller=$_SESSION['caller'];
	}
	if(isset($_GET['caller'])){

	$caller=$_GET['caller'];
	}

//echo $caller; 
	if ($caller=='critics'){
		require_once 'edit-critics.inc.php';
	}elseif($caller=='authors'){
		require_once 'edit-authors.inc.php';
	}elseif($caller=='books'){
		require_once 'edit-books.inc.php';
	}

	elseif($caller=='reviews'){	
		require_once 'edit-reviews.inc.php';
	}

		
		//require_once 'search.inc.php';
//require_once 'display-admin.inc.php'
?>
</body>