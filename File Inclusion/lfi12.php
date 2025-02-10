<!-- from http://hakipedia.com/index.php/Local_File_Inclusion -->
<?php     include("../common/header.php");   ?>

<?php hint("not everything you need to play with is in a text field"); ?>

<form action="/LFI-12/index.php" method="GET">
<?php include(htmlspecialchars($_GET['stylepath'])); ?>
    <input type="hidden" name="style" name="stylepath">
</form>

<?php include($_GET['stylepath']); ?>
