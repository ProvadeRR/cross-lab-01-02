<?php
session_start();
include "../classes/classes.php";
include "../blocks/header.php";
if($_SESSION['USER']['lang'] == "English" && $_SESSION['USER']['role'] == "Администратор" )
{
    $_SESSION['USER']['role'] = "Admin";
    $user = new Admin;
    $user->HelloEN($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelEN();
    $_SESSION['USER']['role'] = "Администратор";
}
if($_SESSION['USER']['lang'] == "Український" && $_SESSION['USER']['role'] == "Администратор" )
{
    $_SESSION['USER']['role'] = "Aдміністратор";
    $user = new Admin;
    $user->HelloUK($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelUK();
    $_SESSION['USER']['role'] = "Администратор";
}
if($_SESSION['USER']['lang'] == "Русский" && $_SESSION['USER']['role'] == "Администратор" )
{
    $_SESSION['USER']['role'] = "Администратор";
    $user = new Admin;
    $user->HelloRU($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelRU();
}
if($_SESSION['USER']['lang'] == "English" && $_SESSION['USER']['role'] == "Менеджер" )
{
    $_SESSION['USER']['role'] = "Manager";
    $user = new Manager;
    $user->HelloEN($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelEN();
    $_SESSION['USER']['role'] = "Менеджер";
}
if($_SESSION['USER']['lang'] == "Український" && $_SESSION['USER']['role'] == "Менеджер" )
{
    $_SESSION['USER']['role'] = "Менеджер";
    $user = new Manager;
    $user->HelloUK($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelUK();
    $_SESSION['USER']['role'] = "Менеджер";
}
if($_SESSION['USER']['lang'] == "Русский" && $_SESSION['USER']['role'] == "Менеджер" )
{
    $_SESSION['USER']['role'] = "Менеджер";
    $user = new Manager;
    $user->HelloRU($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelRU();
}
if($_SESSION['USER']['lang'] == "English" && $_SESSION['USER']['role'] == "Клиент" )
{
    $_SESSION['USER']['role'] = "Client";
    $user = new Client;
    $user->HelloEN($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelEN();
    $_SESSION['USER']['role'] = "Клиент";
}
if($_SESSION['USER']['lang'] == "Український" && $_SESSION['USER']['role'] == "Клиент" )
{
    $_SESSION['USER']['role'] = "Клієнт";
    $user = new Client;
    $user->HelloUK($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelUK();
    $_SESSION['USER']['role'] = "Клиент";
}
if($_SESSION['USER']['lang'] == "Русский" && $_SESSION['USER']['role'] == "Клиент" )
{
    $_SESSION['USER']['role'] = "Клиент";
    $user = new Client;
    $user->HelloRU($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    $user->draw_panelRU();
}
if($_SESSION['USER']['lang'] == "Русский"):?>
<form action="../guest/isAuth/logout.php" method="POST">
<button type="submit" class="btn btn-primary" name="exit">Выйти</button>
</form>
<?php endif;
if($_SESSION['USER']['lang'] == "Український"):?>
    <form action="../guest/isAuth/logout.php" method="POST">
    <button type="submit" class="btn btn-primary" name="exit">Вийти</button>
    </form>
<?php endif;
if($_SESSION['USER']['lang'] == "English"):?>
    <form action="../guest/isAuth/logout.php" method="POST">
    <button type="submit" class="btn btn-primary" name="exit">Exit</button>
    </form>
<?php endif;