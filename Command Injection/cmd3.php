<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php
hint("will exec 'whois' with the arg specified in the GET parameter \"domain\"");
?>

<?php
    if (isset($_GET['domain'])) {
        $domain = escapeshellarg($_GET['domain']);
        system('/usr/bin/whois ' . $domain);
    }
?>
    Whois: <input type="text" name="domain">
</form>

<pre>
<?php
    system("/usr/bin/whois " . $_GET["domain"]);
 ?>
</pre>