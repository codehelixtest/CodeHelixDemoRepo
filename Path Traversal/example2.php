<?php
$file = $_GET['file'];
$file = basename($_GET['file']); // Sanitize the filename
$content = $_GET['content'];
file_put_contents("/some/path/$file", $content);
file_put_contents("/some/path/$file",$content);
fclose($fh);
?>
