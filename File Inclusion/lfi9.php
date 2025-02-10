<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php include('includes/class_' . basename($_POST['class']) . '.php'); ?>

<form action="/LFI-9/index.php" method="POST">
    <input type="text" name="class">
</form>

<?php
include('includes/class_'.addslashes($_POST['class']).'.php');
?>

