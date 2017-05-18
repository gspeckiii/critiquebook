<!DOCTYPE html> <!-- -->
<html>
<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');
//functions

//included
require_once 'head.inc.php';
?>
<header class="admin">

</header>
<body>
<?php
require_once 'get-variables.inc.php';
require_once 'display-admin.inc.php';
?>
</body>