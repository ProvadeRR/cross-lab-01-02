<?php
session_start();
include "../../classes/classes.php";
if (isset($_POST['ru'])) {
    $_SESSION['USER']['lang'] = "ru";
    header("Location: ../../");
}
if (isset($_POST['en'])) {
    $lang = $_POST['en'];
    $_SESSION['USER']['lang'] = "en";
    header("Location: ../../");
}
if (isset($_POST['uk'])) {
    $_SESSION['USER']['lang'] = "uk";
    header("Location: ../../");
}
