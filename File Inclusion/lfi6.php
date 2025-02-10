<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->

<?php hint("will include the arg specified in the POST parameter \"page\"");  ?>


<form action="/LFI-6/index.php" method="POST">
<?php include('../common/header.php'); ?>

<form action="/LFI-6/index.php" method="POST">
    <input type="text" name="page">
</form>

<?php
$page = basename($_POST['page']); // Sanitize input
$allowed_pages = ['page1.php', 'page2.php']; // Define allowed pages
if (in_array($page, $allowed_pages)) {
    include($page);
} else {
    echo 'Invalid page';
}
?>
</form>

<?php
include($_POST["page"]);
?>
