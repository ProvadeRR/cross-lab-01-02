<?php
session_start();
require_once "../../database/Users.php";

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    for ($i = 0; $i < count($USERS); $i++) {
        if ($_POST['login'] == $USERS[$i]['login'] && $_POST['password'] == $USERS[$i]['password']) {
            $_SESSION['USER'] = [
                "name" => $USERS[$i]['name'],
                "surname" => $USERS[$i]['surname'],
                "role" => $USERS[$i]['role'],
                "lang" => $USERS[$i]['lang'],
            ];
            if (empty($_SESSION['USER']['lang'])) {
                header("Location: ../isAuth/checkLanguage.php");
            } else {
                header("Location: ../../");
            }
        } else if ($_POST['login'] == $USERS[$i]['login'] && $_POST['password'] != $USERS[$i]['password']) {
            $_SESSION['inputLogin'] = $_POST['login'];
            $_SESSION['message'] = "Вы ввели неверный пароль";
            header("Location: form-auth.php");
            break;
        }
        for ($j = 0; $j < count($USERS); $j++) {
            if ($_POST['login'] != $USERS[$j]['login']) {
                $_SESSION['message'] = "Пользователя не существует";
                header("Location: form-auth.php");
                break;
            }
        }
    }
} else {
    if (empty($_POST['login']) && empty($_POST['password'])) {
        $_SESSION['message'] = "Введите пароль и логин";
        header("Location: form-auth.php");
    } else if (empty($_POST['login'])) {
        $_SESSION['message'] = "Введите логин";
        header("Location: form-auth.php");
    } else if (empty($_POST['password'])) {
        $_SESSION['message'] = "Введите пароль";
        header("Location: form-auth.php");
    }
}
