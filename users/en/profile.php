<?php
session_start();
require_once "../../classes/classes.php";
include "../../blocks/header.php";
$user->HelloEN($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
$user->draw_panelEN();
?>
<form action="../../guest/isAuth/logout.php" method="POST">
    <button type="submit" class="btn btn-primary" name='exit'>EXIT</button>
</form>