<?php

require_once('../_helpers/strip.php');

// first, get a variable name based on the user input
$variable = isset($_GET['variable']) ? $_GET['variable'] : 'empty';
if (preg_match('/^[a-zA-Z0-9_]+$/', $variable)) {
    echo $$variable;
} else {
    echo 'Invalid variable';
}
$empty = 'No variable given';

// pass the variable name into an eval block, making it
// vulnerable to Remote Code Execution (rce). This RCE
// is NOT blind.
eval('echo $' . $variable . ';');
