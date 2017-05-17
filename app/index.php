<?php

require_once 'php-functions/show-authors.fn.php';
require_once 'php-functions/show-critics.fn.php';
require_once 'php-includes/head.inc.php';
?>
<body>

<?php

require_once 'php-includes/header.inc.php';

require_once 'php-includes/intro.inc.php';
require_once 'php-includes/menuAuthors.inc.php';
require_once 'php-includes/menuCritics.inc.php';
require_once 'php-includes/critics.inc.php';
if(isset($_GET['critic_id'])) {
	$critic_id=$_GET['critic_id'];
}
if(isset($critic_id)){
	require_once 'php-includes/review.inc.php';
}else{
	require_once 'php-includes/reviews.inc.php';	
}

?>




</body>
</html>
