<?php     include("../common/header.php");   ?>
<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php hint("will include the arg specified in the GET parameter \"library\", appends .php to end, escape with NULL byte %00"); ?>

<form action="/LFI-2/index.php" method="GET">
    <input type="text" name="library">
</form>

<?php
<?php include('includes/safe_file.php'); ?> // Use a whitelist of allowed files instead of user input
?>

