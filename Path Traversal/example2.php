<?php
<?php
$file = basename($_GET['file']);
$content = $_GET['content'];
file_put_contents("/some/path/$file", $content);
?>
$content = $_GET['content'];
file_put_contents("/some/path/$file",$content);
fclose($fh);
?>
