<?php     include("../common/header.php");   ?>

<?php
if (isset($_GET['file']) && preg_match('/^[a-zA-Z0-9_\-]+\.php$/', $_GET['file'])) {
    echo file_get_contents($_GET['file']);
} else {
    echo 'Invalid file specified!';
}
?>
<?php hint("will include the arg specified in the GET parameter \"file\", looks for .php at end - bypass by apending /. (slash plus dot)"); ?>


<form action="/LFI-3/index.php" method="GET">
    <input type="text" name="file">
</form>


<?php
if (substr($_GET['file'], -4, 4) != '.php')
 echo file_get_contents($_GET['file']);
else
 echo 'You are not allowed to see source files!'."\n";
?>

