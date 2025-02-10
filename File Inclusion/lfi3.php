<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
<?php hint("will include the arg specified in the GET parameter \"file\", looks for .php at end - bypass by apending /. (slash plus dot)"); ?>


<form action="/LFI-3/index.php" method="GET">
    <input type="text" name="file">
<?php include('../common/header.php'); ?>

<form action="/LFI-3/index.php" method="GET">
    <input type="text" name="file">
</form>

<?php
$allowed_files = ['allowed_file1.php', 'allowed_file2.php']; // Define allowed files
if (in_array($_GET['file'], $allowed_files)) {
    echo file_get_contents($_GET['file']);
} else {
    echo 'You are not allowed to see source files!' . "\n";
}
?>


<?php
if (substr($_GET['file'], -4, 4) != '.php')
 echo file_get_contents($_GET['file']);
else
 echo 'You are not allowed to see source files!'."\n";
?>

