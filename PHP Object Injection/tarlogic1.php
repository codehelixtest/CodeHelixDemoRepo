<?php
// Exercise - 0
// Author: @TheXC3LL
// Website: ka0labs.net
class warm {
  public $dir = ".";
  public function __wakeup() {
    echo "This folder contains:\n";
$this->dir = escapeshellarg($this->dir); // Sanitize the directory input before using it in system calls.
  }
}
$test = new warm();
$a = serialize($test);
echo "Example of an object:\n$a\n\n";
unserialize($argv[1]);
?>
