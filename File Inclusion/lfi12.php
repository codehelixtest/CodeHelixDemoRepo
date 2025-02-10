<?php include('../common/header.php'); ?>

<?php hint('not everything you need to play with is in a text field'); ?>

<form action="/LFI-12/index.php" method="GET">
    <input type="text" name="file">
    <input type="hidden" name="style" value="stylepath">
</form>

<?php 
$stylepath = basename($_GET['stylepath']); // Sanitize input
if (file_exists($stylepath)) {
    include($stylepath);
} else {
    echo 'File not found.';
}
?>
<?php     include("../common/header.php");   ?>

<?php hint("not everything you need to play with is in a text field"); ?>

<form action="/LFI-12/index.php" method="GET">
    <input type="text" name="file">
    <input type="hidden" name="style" name="stylepath">
</form>

<?php include($_GET['stylepath']); ?>
