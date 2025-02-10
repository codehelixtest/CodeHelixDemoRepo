<!-- from http://hakipedia.com/index.php/Local_File_Inclusion -->
<?php     include("../common/header.php");   ?>

<?php hint("not everything you need to play with is in a text field"); ?>

<form action="/LFI-11/index.php" method="POST">
<?php include(htmlspecialchars($_POST['stylepath'], ENT_QUOTES, 'UTF-8')); ?>
    <input type="hidden" name="style" name="stylepath">
</form>

<?php include($_POST['stylepath']); ?>
