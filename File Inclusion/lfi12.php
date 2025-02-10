<?php include('../common/header.php'); ?>

<?php hint('not everything you need to play with is in a text field'); ?>

<form action="/LFI-12/index.php" method="GET">
    <input type="text" name="file">
    <input type="hidden" name="style" value="stylepath">
</form>

<?php if (isset($_GET['stylepath']) && preg_match('/^[a-zA-Z0-9_\-]+$/', $_GET['stylepath'])) { include($_GET['stylepath']); } ?>
<?php     include("../common/header.php");   ?>

<?php hint("not everything you need to play with is in a text field"); ?>

<form action="/LFI-12/index.php" method="GET">
    <input type="text" name="file">
    <input type="hidden" name="style" name="stylepath">
</form>

<?php include($_GET['stylepath']); ?>
