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
<?php
require_once('../_helpers/strip.php');
$name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
?>
<html>
  <head>
  </head>
  <body>
    <p>
      Hi, <?= $name; ?>
    </p>
    <script>
      window.onload = function(){
        let someObject = window.someObject || {};
        let script = document.createElement('script');
        script.src = someObject.url;
        document.body.appendChild(script);
     };
    </script>
  </body>
</html>
    <script>
      window.onload = function(){
        let someObject = window.someObject || {};
        let script = document.createElement('script');
        script.src = someObject.url;
        document.body.appendChild(script);
     };
    </script>
  </body>
</html>
