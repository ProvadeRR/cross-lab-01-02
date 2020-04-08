<?php
session_start();
include "../../classes/classes.php";
if (isset($_POST['lang'])) {
    $_SESSION['USER']['lang'] = $_POST['lang'];
    header("Location: ../../");
}
else{
    header("Location: ../../");
}
