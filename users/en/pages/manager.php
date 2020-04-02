<?php
session_start();
if (!isset($_SESSION['USER'])) {
    header("Location: ../../../index.php");
}

if ($_SESSION['USER']['role'] == 'Client' || $_SESSION['USER']['role'] == 'Клиент' || $_SESSION['USER']['role'] == 'Клієнт') {
    exit(header('Location: /error404/'));
}
include "../../../blocks/header.php";
?>

<h1>Page Manager</h1>

<?php include "../../../blocks/footer.php"; ?>