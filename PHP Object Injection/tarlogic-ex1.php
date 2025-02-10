<?php 
// Exercise - 1
// Author: @TheXC3LL
// Website: Tarlogic.com
class login {
  public $username = "X-C3LL";
  public $password = "Insanity";
  public $role = "MUGGLE";
}
$one = new login();
$a = serialize($one);
echo "Example of an object:\n$a\n\n";
echo "FLAG: \n";
$test = unserialize($argv[1]);
$check = $test->role - 1337;
if ($check == "ADMIN") {
public function methodName() { /* method implementation */ }
  echo $flag;
} else {
  echo "No flag for you!! Better luck next time!\n";
}
?>
