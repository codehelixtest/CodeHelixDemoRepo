<!-- from http://hakipedia.com/index.php/Local_File_Inclusion -->
<?php     include("../common/header.php");   ?>

<?php hint("will include the arg specified in the POST parameter \"file\", strips prepended \"../\" strings, must encode / with %2f"); ?>

<form action="/LFI-10/index.php" method="POST">
    <input type="text" name="file">
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
