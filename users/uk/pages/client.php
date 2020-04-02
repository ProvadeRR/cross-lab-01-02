<?php
session_start();

if (!isset($_SESSION['USER'])) {
    header("Location: ../../../index.php");
}
include "../../../blocks/header.php";
?>

<h1>Cторінка Клієнта</h1>

<?php include "../../../blocks/footer.php"; ?>