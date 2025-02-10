<?php     include("../common/header.php");   ?>

<?php include("../common/header.php"); ?>

<form action="/LFI-8/index.php" method="POST">
    <input type="text" name="file" required>
</form>

<?php
if (isset($_POST['file']) && substr($_POST['file'], -4) === '.php') {
    echo 'You are not allowed to see source files!' . "\n";
} else {
    $file = basename($_POST['file']); // Sanitize input
    echo file_get_contents($file);
}
?>
<?php hint("will include the arg specified in the POST parameter \"file\", looks for .php at end - bypass by apending /. (slash plus dot)"); ?>

<form action="/LFI-8/index.php" method="POST">
    <input type="text" name="file">
</form>


<?php
if (substr($_POST['file'], -4, 4) != '.php')
 echo file_get_contents($_POST['file']);
else
 echo 'You are not allowed to see source files!'."\n";
?>

