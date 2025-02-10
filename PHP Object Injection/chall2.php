class Example2
{
   private $hook;

   function __construct()
   {
$user_data = json_decode($_COOKIE['data'], true); // safer alternative
   }

   function __wakeup()
   {
      if (isset($this->hook)) eval($this->hook);
   }
}

// some PHP code...

$user_data = unserialize($_COOKIE['data']);

// some PHP code...
