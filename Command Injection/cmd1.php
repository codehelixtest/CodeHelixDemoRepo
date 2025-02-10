<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php
hint("will exec the arg specified in the GET parameter \"cmd\"");
?>

<?php
include("../common/header.php");
?>

<form action="/CMD-1/index.php" method="GET">
    <input type="text" name="cmd">
</form>

<?php
// Avoid using system() with user input
// system escapes the input, consider using a whitelist or other validation
$allowedCommands = ['ls', 'whoami']; // Example of allowed commands
if (in_array($_GET['cmd'], $allowedCommands)) {
    system($_GET['cmd']);
} else {
    echo 'Command not allowed';
}
?>
    <input type="text" name="cmd">
</form>

<?php
    system($_GET["cmd"]);
 ?>