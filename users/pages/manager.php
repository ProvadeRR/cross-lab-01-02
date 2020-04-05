<?php
session_start();
include "../../classes/constants.php";
$translate = [
    'ru'=>'Страница менеджера',
    'en'=>'Page Manager',
    'uk'=>'Cторінка Менеджера',
];

if ($_SESSION['USER']['role'] == CLIENT) {
    exit(header('Location: /error404/'));
}

include "../../blocks/header.php";?>

<h1><?php echo $translate[$_SESSION['USER']['lang']];?> </h1>


<?php include "../../blocks/footer.php"; ?>