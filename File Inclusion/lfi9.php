<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php hint("will include the arg specified in the POST parameter \"class\", appends .php to end, defeat with NULL byte %00"); ?>

<form action="/LFI-9/index.php" method="POST">
    <input type="text" name="class">
</form>

<?php
<?php
$allowed_classes = ['class1', 'class2']; // Example whitelist
if (in_array($_POST['class'], $allowed_classes)) {
    include('includes/class_' . $_POST['class'] . '.php');
} else {
    // Handle error
}
?>
?>

