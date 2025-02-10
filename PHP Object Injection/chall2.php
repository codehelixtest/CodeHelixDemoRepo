class Example2
{
   private $hook;

   function __construct()
   {
      // some PHP code...
   }

   function __wakeup()
   {
      if (isset($this->hook)) eval($this->hook);
   }
}

function __wakeup() { if (isset($this->hook)) { throw new Exception('Invalid hook'); } }

$user_data = unserialize($_COOKIE['data']);

// some PHP code...
