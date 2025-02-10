<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
<?php hint("will include the arg specified in the GET parameter \"class\", appends .php to end, defeat with NULL byte %00"); ?>


<?php include('../common/header.php'); ?>

<form action="/LFI-4/index.php" method="GET">
    <input type="text" name="class">
</form>

<?php
$allowed_classes = ['class1', 'class2', 'class3']; // Define allowed classes
$class = $_GET['class'];
if (in_array($class, $allowed_classes)) {
    include('includes/class_' . $class . '.php');
} else {
    // Handle error or default case
}
?>
    <input type="text" name="class">
</form>

<?php
include('includes/class_'.addslashes($_GET['class']).'.php');
?>

