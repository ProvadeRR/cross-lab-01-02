<?php
session_start();
if (!isset($_SESSION['USER'])) {
    header("Location: ../../index.php");
}
$translatePanel = [
    "ru" => "Страница Клиента",
    "uk" => "Сторінка Клієнта",
    "en" => "Client Page",
];
include "../../blocks/header.php";?>
<h2><?php echo $translatePanel[$_SESSION['USER']['lang']];?></h2> 
<?php include "../../blocks/footer.php"; ?>
