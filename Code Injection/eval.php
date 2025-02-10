<?php

require_once('../_helpers/strip.php');

// first, get a variable name based on the user input
$variable = strlen($_GET['variable']) > 0 ? $_GET['variable'] : 'empty';
$variable = isset($_GET['variable']) ? $_GET['variable'] : 'empty'; // Ensure proper validation and sanitization before using the variable

// pass the variable name into an eval block, making it
// vulnerable to Remote Code Execution (rce). This RCE
// is NOT blind.
eval('echo $' . $variable . ';');
