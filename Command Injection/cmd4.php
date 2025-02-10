<?php     include("../common/header.php");   ?>
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
<?php  hint("will exec 'whois' with the arg specified in the POST parameter \"domain\""); ?>

<form action="/CMD-4/index.php" method="POST">
    <input type="text" name="domain">
</form>

<pre>
<?php
    system("whois " . $_POST["domain"]);
 ?>
</pre>