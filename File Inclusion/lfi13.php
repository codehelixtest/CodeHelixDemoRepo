<?php include('../common/header.php'); ?>

<?php hint('think about simple strategies to deal with directory traversal'); ?>

<form action="/LFI-13/index.php" method="GET">
    <input type="text" name="file" required>
</form>

<?php
   $file = basename($_GET['file']); // Use basename to prevent directory traversal
   if(isset($file))
   {
       $allowed_files = ['index.php', 'page1.php', 'page2.php']; // Define allowed files
       if (in_array($file, $allowed_files)) {
           include("pages/$file");
       } else {
           echo 'Invalid file';
       }
   }
   else
   {
       include("index.php");
   }
?>
<?php     include("../common/header.php");   ?>

<?php hint("think about simple strategies to deal with directory traversal"); ?>

<form action="/LFI-13/index.php" method="GET">
    <input type="text" name="file">
</form>

<?php
   $file = str_replace('../', '', $_GET['file']);
   if(isset($file))
   {
       include("pages/$file");
   }
   else
   {
       include("index.php");
   }
?>
