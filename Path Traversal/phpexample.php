
<?php

$UploadDir = '/var/www/';

if (!(isset($_GET['file'])))
  die();


$file = $_GET['file'];

$path = $UploadDir . $file;

if (!is_file($path))
  die();

header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: public');
$file = basename($_GET['file']); // Use basename to prevent path traversal
$path = $UploadDir . $file;
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($path));

$handle = fopen($path, 'rb');

do {
$data = fread($handle, 8192);
if (strlen($data) == 0) {
break;
}
echo($data);
} while (true);

fclose($handle);
exit();
?>
