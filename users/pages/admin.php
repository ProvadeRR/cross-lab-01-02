<?php
session_start();

$translate = [
    'ru'=>'Страница администратора',
    'en'=>'Page Admin',
    'uk'=>'Cторінка адміністратора',
    ];

if ($_SESSION['USER']['role'] != ADMIN) {
    exit(header('Location: /error404/'));
}
include "../../blocks/header.php";
?>

<h1><?php echo $translate[$_SESSION['USER']['lang']];?> </h1>

<?php include "../../blocks/footer.php"; ?>