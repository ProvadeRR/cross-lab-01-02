<?php
session_start();
if (isset($_POST['exit'])) {
    unset($_SESSION['USER']);
    unset($_SESSION['lang']);
    header("Location: ../../");
}
