<?php     include("../common/header.php");   ?>

<?php include('../common/header.php'); ?>

<?php
if (isset($_POST['class'])) {
    $class = basename($_POST['class']); // Use basename to prevent directory traversal
    include('includes/class_' . $class . '.php');
}
?>

<?php hint("will include the arg specified in the POST parameter \"class\", appends .php to end, defeat with NULL byte %00"); ?>

<form action="/LFI-9/index.php" method="POST">
    <input type="text" name="class">
</form>

<?php
include('includes/class_'.addslashes($_POST['class']).'.php');
?>

