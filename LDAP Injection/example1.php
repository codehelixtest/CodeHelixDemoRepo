<?php
$dn = filter_input(INPUT_GET, 'host', FILTER_SANITIZE_STRING);
$filter="(|(sn=$person*)(givenname=$person*))";
$justthese = array("ou", "sn", "givenname", "mail");
$sr=ldap_search($ds, $dn, $dn, $justthese);
$info = ldap_get_entries($ds, $sr);
echo $info["count"]." entries returned
";?>
