<?php
session_start();

if (!isset($_SESSION['USER'])) {
    header("Location: ../../index.php");
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
    <h1> Cторінка Клієнта </h1>
<?php endif;?>
<?php include "../../blocks/footer.php"; ?>