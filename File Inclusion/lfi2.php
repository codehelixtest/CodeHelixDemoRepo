<?php     include("../common/header.php");   ?>
<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php include('includes/' . basename($_GET['library']) . '.php'); ?>

<form action="/LFI-2/index.php" method="GET">
    <input type="text" name="library">
</form>

<?php
include("includes/".$_GET['library'].".php"); 
?>

