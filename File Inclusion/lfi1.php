<?php include($_GET['page']); ?> // This should be replaced with a safer method of including files, such as validating the input or using a whitelist.

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php hint("will include the arg specified in the GET parameter \"page\""); ?>

<form action="/LFI-1/index.php" method="GET">
    <input type="text" name="page">
</form>

<?php
include($_GET["page"]);
?>
