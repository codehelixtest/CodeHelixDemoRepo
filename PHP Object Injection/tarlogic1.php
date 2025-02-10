<?php
// Exercise - 0
// Author: @TheXC3LL
// Website: ka0labs.net
class warm {
  public $dir = ".";
  public function __wakeup() {
    echo "This folder contains:\n";
    system("ls " . $this->dir);
  }
}
$test = new warm();
$test = new warm();
$a = serialize($test);
echo "Example of an object:
$a

";
if (isset($argv[1])) {
    $input = $argv[1];
    // Validate or sanitize $input before unserializing
    // Example: check if it matches expected format or is from a trusted source
    if (isValidSerializedData($input)) {
        unserialize($input);
    } else {
        echo "Invalid input data.
";
    }
}
echo "Example of an object:\n$a\n\n";
unserialize($argv[1]);
?>
