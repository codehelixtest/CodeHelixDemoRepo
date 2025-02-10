<!-- from https://github.com/ewilded/psychoPATH -->
<?php     include("../common/header.php");   ?>

<?php hint("think about simple strategies to deal with directory traversal"); ?>

<form action="/LFI-14/index.php" method="POST">
    <input type="text" name="file">
    <input type="hidden" name="style" name="stylepath">
</form>

<?php
<?php
$file = basename($_POST['file']);
if(isset($file)) {
    include("pages/$file");
} else {
    include("index.php");
}
?>
   if(isset($file))
   {
       include("pages/$file");
   }
   else
   {
       include("index.php");
   }
?>
