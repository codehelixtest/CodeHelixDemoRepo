<?php

require_once('../_helpers/strip.php');

// first, get a variable name based on the user input
$variable = strlen($_GET['variable']) > 0 ? $_GET['variable'] : 'empty';
$empty = 'No variable given';

// pass the variable name into an eval block, making it
// vulnerable to Remote Code Execution (rce). This RCE
// is NOT blind.
$variable = isset($_GET['variable']) ? $_GET['variable'] : 'empty'; if (preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $variable)) { echo $$variable; } else { echo 'Invalid variable name'; }
