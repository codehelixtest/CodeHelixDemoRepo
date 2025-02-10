<?php
$dn = $_GET['host'];
$filter="(|(sn=$person*)(givenname=$person*))";
$justthese = array("ou", "sn", "givenname", "mail");
$sr=ldap_search($ds, $dn, $dn, $justthese);
$info = ldap_get_entries($ds, $sr);
$dn = filter_input(INPUT_GET, 'host', FILTER_SANITIZE_STRING); $filter = "(|(sn=$person*)(givenname=$person*))"; // Ensure $person is also sanitized before use.
";?>
