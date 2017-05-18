
<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');
//functions
require_once 'show-authors.fn.php';
require_once 'test-critics.fn.php';
require_once 'show-critics.fn.php';
require_once 'show-genre.fn.php';
require_once 'display-reviews.fn.php';
require_once 'display-critics.fn.php';
//includes
require_once 'head.inc.php';


?>
<header>
</header>
<body>

<?php
require_once 'header.inc.php';
require_once 'get-variables.inc.php';



require_once 'intro.inc.php';

require_once 'menuAuthors.inc.php';
require_once 'menuCritics.inc.php';
require_once 'menuGenre.inc.php';

require_once 'display-reviews.inc.php';
require_once 'display-critics.inc.php';
?>

</body>
</html>
