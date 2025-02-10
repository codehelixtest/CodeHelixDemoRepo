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
$data = isset($argv[1]) ? unserialize($argv[1]) : null; if ($data instanceof warm) { /* safe usage */ } else { /* handle error */ }
$a = serialize($test);
echo "Example of an object:\n$a\n\n";
unserialize($argv[1]);
?>
