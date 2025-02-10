<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->

<?php hint("will include the arg specified in the POST parameter \"page\"");  ?>


<form action="/LFI-6/index.php" method="POST">
    <input type="text" name="page">
</form>

<?php
<?php
if (isset($_POST['page']) && preg_match('/^[a-zA-Z0-9_-]+$/', $_POST['page'])) {
    include($_POST['page']);
} else {
    // Handle error
}
?>
?>
