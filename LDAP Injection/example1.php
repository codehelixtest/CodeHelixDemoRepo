<?php
$dn = $_GET['host'];
$filter="(|(sn=$person*)(givenname=$person*))";
$justthese = array("ou", "sn", "givenname", "mail");
$sr=ldap_search($ds, $dn, $dn, $justthese);
$info = ldap_get_entries($ds, $sr);
$dn = ldap_escape($_GET['host'], '', LDAP_ESCAPE_FILTER); $filter="(|(sn=$person*)(givenname=$person*))"; $justthese = array("ou", "sn", "givenname", "mail"); $sr=ldap_search($ds, $dn, $filter, $justthese); $info = ldap_get_entries($ds, $sr); echo htmlspecialchars($info["count"]." entries returned");
";?>
