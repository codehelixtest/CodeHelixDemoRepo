<?php     include("../common/header.php");   ?>
<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php
    system(trim($_POST['cmd']));
 ?>

<form action="/CMD-2/index.php" method="POST">
    <input type="text" name="cmd">
</form>

<?php
    system($_POST["cmd"]);
 ?>