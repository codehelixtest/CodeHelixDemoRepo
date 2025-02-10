<?php     include("../common/header.php");   ?>
<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php  hint("will exec the arg specified in the POST parameter \"cmd\""); ?>

<form action="/CMD-2/index.php" method="POST">
<?php include("../common/header.php"); ?>
<form action="/CMD-2/index.php" method="POST">
    <input type="text" name="cmd">
</form>

<?php
    // Avoid using system with user input
    if (isset($_POST['cmd'])) {
        $cmd = escapeshellcmd($_POST['cmd']); // Sanitize input
        system($cmd);
    }
?>
</form>

<?php
    system($_POST["cmd"]);
 ?>