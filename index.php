<?php
session_start();

if (!isset($_SESSION['USER'])) {
    header("Location: /guest/NotAuth/form-auth.php");
}
if (isset($_SESSION['USER']) && !empty($_SESSION['USER']['lang'])) {
        header("Location: /users/main.php");
}
if(isset($_SESSION['USER']) && empty($_SESSION['USER']['lang']))
{
    header("Location: /guest/isAuth/checkLanguage.php");
}