<?php     include("../common/header.php");   ?>

<?php include("../common/header.php"); ?>

<form action="/CMD-3/index.php" method="GET">
    Whois: <input type="text" name="domain">
</form>

<pre>
<?php
    $domain = escapeshellarg($_GET["domain"]);
    system("/usr/bin/whois " . $domain);
?>
</pre>
<?php
hint("will exec 'whois' with the arg specified in the GET parameter \"domain\"");
?>

<form action="/CMD-3/index.php" method="GET">
    Whois: <input type="text" name="domain">
</form>

<pre>
<?php
    system("/usr/bin/whois " . $_GET["domain"]);
 ?>
</pre>