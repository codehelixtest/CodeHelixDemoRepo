<!-- from http://hakipedia.com/index.php/Local_File_Inclusion -->
<?php     include("../common/header.php");   ?>

<?php hint("will include the arg specified in the POST parameter \"file\", strips prepended \"../\" strings, must encode / with %2f"); ?>

<form action="/LFI-10/index.php" method="POST">
    <input type="text" name="file">
</form>

<?php
   $file = str_replace('../', '', $_POST['file']);
   if(isset($file))
   {
<?php
$file = str_replace('../', '', $_POST['file']);
if (isset($file)) {
    include_once("pages/$file");
} else {
    include_once("index.php");
}
?>
   }
   else
   {
       include("index.php");
   }
?>
