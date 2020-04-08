<?php
session_start();
include "../classes/classes.php";
$changeLanguageSHOW = [
    "ru" => "Ваш язык",
    "uk" => "Ваша мова",
    "en" => "Your Language"
];
$languageCHANGENAME = [
    "ru" => "Русский",
    "uk" => "Українська",
    "en" => "English",
];
$translateEXIT = [
    "ru" => "Выйти",
    "uk" => "Вийти",
    "en" => "Exit",
];
include "../blocks/header.php";
if($_SESSION['USER']['role'] == ADMIN)
{
    $user = new Admin($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    echo $user->Hello()[$_SESSION['USER']['lang']]. '<br>';
    echo '<a href="panel/admin.php">'.$user->draw_panel()[$_SESSION["USER"]['lang']].'</a><br>';
}
if($_SESSION['USER']['role'] == MANAGER)
{
    $user = new Manager($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    echo $user->Hello()[$_SESSION['USER']['lang']] . '<br>';;
    echo '<a href="panel/manager.php">'.$user->draw_panel()[$_SESSION["USER"]['lang']].'</a><br>';
}
if($_SESSION['USER']['role'] == CLIENT)
{
    $user = new Client($_SESSION['USER']['name'], $_SESSION['USER']['surname'], $_SESSION['USER']['role']);
    echo $user->Hello()[$_SESSION['USER']['lang']] . '<br>';;
    echo '<a href="panel/client.php">'.$user->draw_panel()[$_SESSION["USER"]['lang']].'</a><br>';

}
?>
<span><?php echo $changeLanguageSHOW[$_SESSION['USER']['lang']]; ?> </span>
<?php include "changelanguage.php";?>
<form action="../guest/isAuth/logout.php" method="POST">
<button type="submit"  class="btn btn-primary" name="exit"><?php echo $translateEXIT[$_SESSION['USER']['lang']]; ?></button>
</form>



<?php include "../blocks/footer.php"; ?>


