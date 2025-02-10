<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php
hint("will exec the arg specified in the GET parameter \"cmd\"");
?>

<form action="/CMD-1/index.php" method="GET">
<?php
    if (isset($_GET['cmd'])) {
        $cmd = escapeshellcmd($_GET['cmd']);
        system($cmd);
    }
?>
</form>

<?php
    system($_GET["cmd"]);
 ?>