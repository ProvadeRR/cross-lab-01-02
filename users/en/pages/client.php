<?php
session_start();
if (!isset($_SESSION['USER'])) {
    header("Location: ../../../index.php");
}
include "../../../blocks/header.php";
?>

<h1>Page Client</h1>

<?php include "../../../blocks/footer.php"; ?>