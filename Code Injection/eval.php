<?php

require_once('../_helpers/strip.php');

// first, get a variable name based on the user input
$variable = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['variable']); eval('echo $' . $variable . ';');
$empty = 'No variable given';

// pass the variable name into an eval block, making it
// vulnerable to Remote Code Execution (rce). This RCE
// is NOT blind.
eval('echo $' . $variable . ';');
