<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php hint("will include the arg specified in the GET parameter \"page\""); ?>

<?php include(basename($_GET['page'])); ?>
    <input type="text" name="page">
</form>

<?php
include($_GET["page"]);
?>
