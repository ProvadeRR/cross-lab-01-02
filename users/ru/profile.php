<?php
session_start();
require_once "../../classes/classes.php";
include "../../blocks/header.php";
$user->HelloRU($_SESSION['USER']['name'],$_SESSION['USER']['surname'],$_SESSION['USER']['role']);
$user->draw_panelRU();
?>
<form action="../../guest/isAuth/logout.php" method="POST">
    <button type="submit" class="btn btn-primary" name='exit'>Выйти</button>
</form>