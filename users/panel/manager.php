<?php
session_start();
if ($_SESSION['USER']['role'] == CLIENT) {
    exit(header('Location: /error404/'));
}
$translatePanel = [
    "ru" => "Панель Менеджера",
    "uk" => "Панель Менеджера",
    "en" => "Manager Panel",
];
include "../../blocks/header.php";?>
 <h2><?php echo $translatePanel[$_SESSION['USER']['lang']];?><h2> 
 <?php include "../../blocks/footer.php"; ?>

