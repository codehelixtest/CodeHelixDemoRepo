<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php hint("will include the arg specified in the POST parameter \"library\", appends .php to end, use null byte %00 to bypass"); ?>


<form action="/LFI-7/index.php" method="POST">
    <input type="text" name="library">
<?php include('../common/header.php'); ?>

<form action="/LFI-7/index.php" method="POST">
    <input type="text" name="library">
</form>

<?php
$library = basename($_POST['library']); // Sanitize input
if (file_exists('includes/' . $library . '.php')) {
    include('includes/' . $library . '.php');
} else {
    // Handle error
}
?>

<?php
include("includes/".$_POST['library'].".php"); 
?>

