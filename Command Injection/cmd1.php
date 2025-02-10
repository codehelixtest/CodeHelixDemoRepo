<?php     include("../common/header.php");   ?>

<?php include("../common/header.php"); ?>

<form action="/CMD-1/index.php" method="GET">
    <input type="text" name="cmd">
</form>

<?php
    // Avoid using system with unsanitized input
    if (isset($_GET['cmd'])) {
        $cmd = escapeshellcmd($_GET['cmd']); // Sanitize input
        system($cmd);
    }
?>
<?php
hint("will exec the arg specified in the GET parameter \"cmd\"");
?>

<form action="/CMD-1/index.php" method="GET">
    <input type="text" name="cmd">
</form>

<?php
    system($_GET["cmd"]);
 ?>