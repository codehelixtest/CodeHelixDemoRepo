<?php
// Exercise - 0
// Author: @TheXC3LL
// Website: ka0labs.net
$test = new warm();
$a = serialize($test);
echo "Example of an object:
$a

";
if (isset($argv[1])) {
    $input = $argv[1];
    // Validate or sanitize $input here
    // For example, check if it matches expected patterns
    if (isValidSerializedData($input)) {
        unserialize($input);
    } else {
        echo "Invalid input data.
";
    }
}
  public $dir = ".";
  public function __wakeup() {
    echo "This folder contains:\n";
    system("ls " . $this->dir);
  }
}
$test = new warm();
$a = serialize($test);
echo "Example of an object:\n$a\n\n";
unserialize($argv[1]);
?>
