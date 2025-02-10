<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php hint("will include the arg specified in the GET parameter \"page\""); ?>

<form action="/LFI-1/index.php" method="GET">
    <input type="text" name="page">
</form>

<?php
<?php
$allowed_pages = ['home.php', 'about.php'];
$page = $_GET['page'];
if (in_array($page, $allowed_pages)) {
    include($page);
} else {
    // Handle error
}
?>
?>
