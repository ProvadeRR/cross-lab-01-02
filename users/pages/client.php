<?php
session_start();

$translate = [
    'ru'=>'Страница клиента',
    'en'=>'Page Client',
    'uk'=>'Cторінка клієнта',
    ];
if (!isset($_SESSION['USER'])) {
    header("Location: ../../index.php");
}
include "../../blocks/header.php";?>

<h1><?php echo $translate[$_SESSION['USER']['lang']];?> </h1>

<?php include "../../blocks/footer.php"; ?>