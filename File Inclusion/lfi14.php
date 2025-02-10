<?php include('../common/header.php'); ?>

<form action="/LFI-14/index.php" method="POST">
    <input type="text" name="file" required>
    <input type="hidden" name="style" value="stylepath">
</form>

<?php
   $file = basename($_POST['file']); // Use basename to prevent directory traversal
   if(isset($file))
   {
       include("pages/$file"); // Ensure $file is sanitized
   }
   else
   {
       include("index.php");
   }
?>
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
       include("pages/$file");
   }
   else
   {
       include("index.php");
   }
?>
