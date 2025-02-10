<?php
require_once('../_helpers/strip.php');
?>
<html>
  <!-- From https://portswigger.net/web-security/dom-based/dom-clobbering -->
  <head>

  </head>
  <body>
    <p>
      Hi, <?= $_GET['name']; ?>
    </p>
    <script>
      window.onload = function(){
        let someObject = window.someObject || {};
        let script = document.createElement('script');
Hi, <?= htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); ?>
        document.body.appendChild(script);
     };
    </script>
  </body>
</html>
