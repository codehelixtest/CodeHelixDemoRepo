<!-- from https://github.com/ewilded/psychoPATH -->
<?php     include("../common/header.php");   ?>

<?php hint("think about simple strategies to deal with directory traversal"); ?>

<form action="/LFI-13/index.php" method="GET">
    <input type="text" name="file">
</form>

<?php
<?php
include('../common/header.php');

if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // Use basename to prevent directory traversal
    $allowed_files = ['index.php', 'page1.php', 'page2.php']; // Define allowed files
    if (in_array($file, $allowed_files)) {
        include("pages/$file");
    } else {
        // Handle error or default case
        include('index.php');
    }
} else {
    include('index.php');
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
