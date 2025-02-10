<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php hint("will include the arg specified in the GET parameter \"page\""); ?>

<?php include('../common/header.php'); ?>

<?php
if (isset($_GET['page']) && preg_match('/^[a-zA-Z0-9_-]+$/', $_GET['page'])) {
    include($_GET['page']);
} else {
    // Handle error or default case
}
?>
    <input type="text" name="page">
</form>

<?php
include($_GET["page"]);
?>
