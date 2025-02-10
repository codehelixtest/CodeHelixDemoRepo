<?php     include("../common/header.php");   ?>
<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php  hint("not everything you need to inject is in a text input field ..."); ?>

<form action="/CMD-5/index.php" method="GET">
    <input type="text" name="domain">
    <input type="hidden" name="server" value="whois.publicinterestregistry.net">
</form>

<pre>
<?php
$domain = escapeshellarg($_GET['domain']); system('whois -h ' . escapeshellarg($_GET['server']) . ' ' . $domain);
        { system("whois -h " . $_GET["server"] . " " . $_GET["domain"]); } 
    else 
        {echo "malformed domain name";}
    
 ?>
</pre>