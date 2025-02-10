<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->

<?php hint("will include the arg specified in the POST parameter \"page\"");  ?>


<form action="/LFI-6/index.php" method="POST">
    <input type="text" name="page">
</form>

<?php
<?php
$allowed_pages = ['page1.php', 'page2.php'];
$page = $_POST['page'];
if (in_array($page, $allowed_pages)) {
    include($page);
} else {
    // Handle error
}
?>
?>
