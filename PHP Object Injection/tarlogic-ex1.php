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
$test = unserialize($argv[1]); if (!($test instanceof login)) { die('Invalid object'); }
if ($check == "ADMIN") {
  $flag = file_get_contents("flag.txt");
  echo $flag;
} else {
  echo "No flag for you!! Better luck next time!\n";
}
?>
