<?php
session_start();
if ($_SESSION['USER']['role'] != ADMIN) {
    exit(header('Location: /error404/'));
}
$translatePanel = [
    "ru" => "Панель Администратора",
    "uk" => "Панель Адміністратора",
    "en" => "Admin Panel",
];
include "../../blocks/header.php";?>
<h1><?php echo $translatePanel[$_SESSION['USER']['lang']];?></h1> 
<?php include "../../blocks/footer.php"; ?>