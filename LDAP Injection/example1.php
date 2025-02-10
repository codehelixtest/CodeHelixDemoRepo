<?php
$dn = $_GET['host'];
$filter="(|(sn=$person*)(givenname=$person*))";
$justthese = array("ou", "sn", "givenname", "mail");
$sr=ldap_search($ds, $dn, $dn, $justthese);
$info = ldap_get_entries($ds, $sr);
$dn = filter_var($_GET['host'], FILTER_SANITIZE_STRING); // Sanitize input
$filter="(|(sn=$person*)(givenname=$person*))"; // Ensure $person is also sanitized
$sr=ldap_search($ds, $dn, $filter, $justthese); // Use the sanitized $dn
$info = ldap_get_entries($ds, $sr);
echo htmlspecialchars($info["count"], ENT_QUOTES, 'UTF-8')." entries returned"; // Escape output
";?>
