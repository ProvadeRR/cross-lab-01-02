<?php
session_start();
if ($_SESSION['USER']['lang'] != "") {
    header("Location: ../../");
}
$translate = ["uk","ru","en"];
$name = ["Український" , "Русский" , "English"];
include "../../blocks/header.php";
?>
<form action="script.php" class="ml5" method="POST">
    <p>Please select your native language</p>
    <?php for($i = 0 ; $i < count($translate) ; $i++ ):?>
    <button type="submit" class="btn btn-outline-primary mr-2" value=<?php echo $translate[$i]?> name ="lang"><?php echo $name[$i];?> </buttom>
    <?php endfor; ?>
</form>

<?php include "../../blocks/footer.php";