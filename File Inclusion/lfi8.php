<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
<?php hint("will include the arg specified in the POST parameter \"file\", looks for .php at end - bypass by apending /. (slash plus dot)"); ?>

<form action="/LFI-8/index.php" method="POST">
    <input type="text" name="file">
</form>


<?php
if (substr($_POST['file'], -4, 4) != '.php')
<?php
if (isset($_POST['file']) && substr($_POST['file'], -4) === '.php') {
    echo 'You are not allowed to see source files!' . "\n";
} else {
    // Sanitize and validate the input to prevent LFI
    $file = basename($_POST['file']); // Only allow the base name
    $allowed_files = ['file1.txt', 'file2.txt']; // Example of allowed files
    if (in_array($file, $allowed_files)) {
        echo file_get_contents($file);
    } else {
        echo 'Invalid file specified.';
    }
}
?>
else
 echo 'You are not allowed to see source files!'."\n";
?>

