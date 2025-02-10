<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php
hint("will exec the arg specified in the GET parameter \"cmd\"");
?>

<?php
    if (isset($_GET['cmd'])) {
        $cmd = escapeshellcmd($_GET['cmd']);
        system($cmd);
    }
?>
    <input type="text" name="cmd">
</form>

<?php
    system($_GET["cmd"]);
 ?>