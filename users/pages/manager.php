<?php
session_start();

if (!isset($_SESSION['USER'])) {
    header("Location: ../../../index.php");
}
if ($_SESSION['USER']['role'] == 'Client' || $_SESSION['USER']['role'] == 'Клиент' || $_SESSION['USER']['role'] == 'Клієнт') {
    exit(header('Location: /error404/'));
}
include "../../blocks/header.php";
?>

<?php if($_SESSION['USER']['lang'] == "Русский"): ?>
    <h1> Страница клиента </h1>
<?php endif;?>
<?php if($_SESSION['USER']['lang'] == "English"): ?>
    <h1> Page Client </h1>
<?php endif;?>
<?php if($_SESSION['USER']['lang'] == "Український"): ?>
    <h1> Cторінка менеджера </h1>
<?php endif;?>
<?php include "../../blocks/footer.php"; ?>