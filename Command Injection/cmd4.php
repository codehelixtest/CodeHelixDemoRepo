<?php     include("../common/header.php");   ?>
<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php  hint("will exec 'whois' with the arg specified in the POST parameter \"domain\""); ?>

<form action="/CMD-4/index.php" method="POST">
    <input type="text" name="domain">
</form>

<?php include("../common/header.php"); ?>
<form action="/CMD-4/index.php" method="POST">
    <input type="text" name="domain">
</form>

<pre>
<?php
    $domain = escapeshellarg($_POST["domain"]);
    system("whois " . $domain);
?>
</pre>
<?php
    system("whois " . $_POST["domain"]);
 ?>
</pre>