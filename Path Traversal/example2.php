<?php
$file = $_GET['file'];
$content = $_GET['content'];
$file = basename($_GET['file']); // Sanitize the file name
$content = $_GET['content'];
file_put_contents('/some/path/' . $file, $content);
fclose($fh);
?>
