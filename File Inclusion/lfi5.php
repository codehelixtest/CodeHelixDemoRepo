<!-- from http://hakipedia.com/index.php/Local_File_Inclusion -->
<?php     include("../common/header.php");   ?>

<?php
$file = basename($_GET['file']);
if(isset($file)) {
    include("pages/$file");
} else {
    include("index.php");
}
?>


<form action="/LFI-5/index.php" method="GET">
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
