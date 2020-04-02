<?php
session_start();
if ($_SESSION['USER']['lang'] != "") {
    header("Location: ../../");
}
include "../../blocks/header.php"
?>
<form action="script.php" class="ml5" method="POST">
    <p>Please select your native language</p>
    <input type="submit" class="btn btn-outline-primary" value="Український" name="uk">
    <input type="submit" class="btn btn-outline-primary" value="Русский" name="ru">
    <input type="submit" class="btn btn-outline-primary" value="English" name="en">
</form>

<?php include "../../blocks/footer.php";