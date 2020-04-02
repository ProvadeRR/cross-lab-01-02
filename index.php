<?php
session_start();

if (isset($_SESSION['USER']) && $_SESSION['USER']['lang'] == "ru") {
    header("Location: users/ru/profile.php");
}
if (isset($_SESSION['USER']) && $_SESSION['USER']['lang'] == "en") {
    header("Location: users/en/profile.php");
}
if (isset($_SESSION['USER']) && $_SESSION['USER']['lang'] == "uk") {
    header("Location: users/uk/profile.php");
}
if(isset($_SESSION['USER']) && $_SESSION['USER']['lang'] == "")
{
    header("Location: /guest/isAuth/checkLanguage.php");
}
if (!isset($_SESSION['USER'])) {
    header("Location: /guest/NotAuth/form-auth.php");
}
