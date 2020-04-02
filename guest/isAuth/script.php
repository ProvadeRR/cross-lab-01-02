<?php
session_start();
if (isset($_POST['ru'])) {
    $_SESSION['USER']['lang'] = "ru";
    switch ($_SESSION['USER']['role']) {
        case "Администратор": {
                $_SESSION['USER']['role'] = "Администратор";
                break;
            }
        case "Менеджер": {
                $_SESSION['USER']['role'] = "Менеджер";
                break;
            }
        case "Клиент": {
                $_SESSION['USER']['role'] = "Клиент";
                break;
            }
    }
    header("Location: ../../users/ru/profile.php");
}
if (isset($_POST['en'])) {
    $_SESSION['USER']['lang'] = "en";
    switch ($_SESSION['USER']['role']) {
        case "Администратор": {
                $_SESSION['USER']['role'] = "Admin";
                break;
            }
        case "Менеджер": {
                $_SESSION['USER']['role'] = "Manager";
                break;
            }
        case "Клиент": {
                $_SESSION['USER']['role'] = "Client";
                break;
            }
    }
    header("Location: ../../users/en/profile.php");
}
if (isset($_POST['uk'])) {
    $_SESSION['USER']['lang'] = "uk";
    switch ($_SESSION['USER']['role']) {
        case "Администратор": {
                $_SESSION['USER']['role'] = "Адміністратор";
                break;
            }
        case "Менеджер": {
                $_SESSION['USER']['role'] = "Менеджер";
                break;
            }
        case "Клиент": {
                $_SESSION['USER']['role'] = "Клієнт";
                break;
            }
    }
    header("Location: ../../users/uk/profile.php");
}
