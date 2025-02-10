<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php hint("will include the arg specified in the POST parameter \"class\", appends .php to end, defeat with NULL byte %00"); ?>

<?php include('../common/header.php'); ?>

<?php
if (isset($_POST['class'])) {
    $class = basename($_POST['class']); // Use basename to prevent directory traversal
    include('includes/class_' . $class . '.php');
}
?>
    <input type="text" name="class">
</form>

<?php
include('includes/class_'.addslashes($_POST['class']).'.php');
?>

