<?php
session_start();

if ($_SESSION['USER']['role'] != "Администратор") {
    exit(header('Location: /error404/'));
}
include "../../blocks/header.php";
?>
<?php if($_SESSION['USER']['lang'] == "Русский"): ?>
    <h1> Страница администратора </h1>
<?php endif;?>
<?php if($_SESSION['USER']['lang'] == "English"): ?>
    <h1> Page Admin </h1>
<?php endif;?>
<?php if($_SESSION['USER']['lang'] == "Український"): ?>
    <h1> Cторінка адміністратора </h1>
<?php endif;?>

<?php include "../../blocks/footer.php"; ?>