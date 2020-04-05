<?php
session_start();
include "../classes/constants.php";
include "../classes/classes.php";
include "../blocks/header.php";
$translate = [
    "ru" => "Выйти",
    "uk" => "Вийти",
    "en" => "Exit",
];
if($_SESSION['USER']['role'] == ADMIN)
{
    $user = new Admin;
    $hello = $user->Hello($_SESSION['USER']['name'], $_SESSION['USER']['surname']);
    $panel = $user->draw_panel();
    echo $hello[$_SESSION['USER']['lang']];
    echo $panel[$_SESSION['USER']['lang']];
}
if($_SESSION['USER']['role'] == MANAGER)
{
    $user = new Manager;
    $hello = $user->Hello($_SESSION['USER']['name'], $_SESSION['USER']['surname']);
    $panel = $user->draw_panel();
    echo $hello[$_SESSION['USER']['lang']];
    echo $panel[$_SESSION['USER']['lang']];
}
if($_SESSION['USER']['role'] == CLIENT)
{
    $user = new Client;
    $hello = $user->Hello($_SESSION['USER']['name'], $_SESSION['USER']['surname']);
    $panel = $user->draw_panel();
    echo $hello[$_SESSION['USER']['lang']];
    echo $panel[$_SESSION['USER']['lang']];
}
?>
<form action="../guest/isAuth/logout.php" method="POST">
<button type="submit" class="btn btn-primary" name="exit"><?php echo $translate[$_SESSION['USER']['lang']]; ?></button>
</form>