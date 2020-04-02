<?php
session_start();

if ($_SESSION['USER']['role'] != "Администратор" && $_SESSION['USER']['role'] != "Admin" && $_SESSION['USER']['role'] != "Адміністратор") {
    exit(header('Location: /error404/'));
}
include "../../../blocks/header.php";
?>
<h1>Cторінка Aдміністратора</h1>

<?php include "../../../blocks/footer.php"; ?>