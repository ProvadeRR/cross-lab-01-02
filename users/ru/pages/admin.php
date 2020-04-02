<?php
session_start();
if (!isset($_SESSION['USER'])) {
    header("Location: ../../../index.php");
}

if ($_SESSION['USER']['role'] != "Администратор" && $_SESSION['USER']['role'] != "Admin" && $_SESSION['USER']['role'] != "Адміністратор") {
    exit(header('Location: /error404/'));
}
include "../../../blocks/header.php";

?>
<h1>Страница Администратора</h1>

<?php include "../../../blocks/footer.php"; ?>