<?php
session_start();
include "infouser.php";
if ($role == 1) {
    exit(header('Location: /error403/'));
}
include "../blocks/header.php";
echo $obj->Hello()[$_SESSION['lang']];
?>

<?php include "../blocks/changelanguage.php";?>
<?php include "../blocks/exit.php";?>
 <?php include "../blocks/footer.php"; ?>

