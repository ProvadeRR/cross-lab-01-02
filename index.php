<?php
session_start();

if (!isset($_SESSION['USER'])) {
    header("Location: /guest/NotAuth/form-auth.php");
}
if (isset($_SESSION['USER']) && $_SESSION['USER']['lang'] != "") {
    header("Location: users/profile.php");
}
if(isset($_SESSION['USER']) && $_SESSION['USER']['lang'] == "")
{
    header("Location: /guest/isAuth/checkLanguage.php");
}
