<?php
session_start();

if ($_SESSION['USER']['role'] != "Администратор" && $_SESSION['USER']['role'] != "Admin" && $_SESSION['USER']['role'] != "Адміністратор") {
    exit(header('Location: /error404/'));
}
include "../../../blocks/header.php";
?>

<h1>Page Admin</h1>


<?php include "../../../blocks/footer.php"; ?>