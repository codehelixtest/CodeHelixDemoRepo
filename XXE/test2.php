<?php
libxml_disable_entity_loader (false);
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$name = $info->name;
$tel = $info->tel;
$email = $info->email;
$password = $info->password;

echo "Sorry, $email is already registered!";
?>
