<?php
session_start();
if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
    header("Location: ../../");
}
else{
    header("Location: ../../");
}
