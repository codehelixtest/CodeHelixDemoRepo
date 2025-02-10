<?php     include("../common/header.php");   ?>
<?php include("../common/header.php"); ?>
<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<form action="/CMD-2/index.php" method="POST">
    <input type="text" name="cmd">
</form>

<?php
    // Avoid executing user input directly
    if (isset($_POST['cmd'])) {
        $cmd = escapeshellcmd($_POST['cmd']); // Sanitize input
        system($cmd);
    }
?>
<?php  hint("will exec the arg specified in the POST parameter \"cmd\""); ?>

<form action="/CMD-2/index.php" method="POST">
    <input type="text" name="cmd">
</form>

<?php
    system($_POST["cmd"]);
 ?>