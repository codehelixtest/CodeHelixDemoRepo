
<?php

$UploadDir = '/var/www/';

if (!(isset($_GET['file'])))
  die();


$file = $_GET['file'];

$path = $UploadDir . $file;

if (!is_file($path))
  die();

if (!preg_match('/^[a-zA-Z0-9._-]+$/', $file)) die();
header('Cache-Control: public');
header('Content-Disposition: inline; filename="' . basename($path) . '";');
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
