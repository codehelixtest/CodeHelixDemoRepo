<!-- from https://github.com/ewilded/psychoPATH -->
<?php     include("../common/header.php");   ?>

<?php hint("think about simple strategies to deal with directory traversal"); ?>

<form action="/LFI-14/index.php" method="POST">
    <input type="text" name="file">
    <input type="hidden" name="style" name="stylepath">
</form>

<?php
   $file = str_replace('../', '', $_POST['file']);
   if(isset($file))
   {
<?php
   $file = str_replace('../', '', $_POST['file']);
   if(isset($file))
   {
       include_once("pages/$file");
   }
   else
   {
       include_once("index.php");
   }
?>
   }
   else
   {
       include("index.php");
   }
?>
