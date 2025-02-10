<?php
$dn = $_GET['host'];
$filter="(|(sn=$person*)(givenname=$person*))";
$justthese = array("ou", "sn", "givenname", "mail");
$dn = htmlspecialchars($_GET['host'], ENT_QUOTES, 'UTF-8');
$person = htmlspecialchars($_GET['person'], ENT_QUOTES, 'UTF-8');
$filter="(|(sn=$person*)(givenname=$person*))";
$sr=ldap_search($ds, $dn, $filter, $justthese);
$info = ldap_get_entries($ds, $sr);
echo $info["count"]." entries returned
";?>
