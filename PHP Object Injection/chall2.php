class Example2
{
   private $hook;

function __wakeup() { if (isset($this->hook)) { throw new Exception('Invalid hook'); } }
   {
      // some PHP code...
   }

   function __wakeup()
   {
      if (isset($this->hook)) eval($this->hook);
   }
}

// some PHP code...

$user_data = unserialize($_COOKIE['data']);

// some PHP code...
