<?php
session_start();

class Client
{

    public function Hello($name, $surname, $role)
    {
        echo "Hello " . $role . " " . $name . " " . $surname . ".You can view the information available to users on the site";
    }
    public function draw_panel()
    {
        echo '<a href="pages/client.php">Page Client</a>';
    }
}

class Admin
{

    public function Hello($name, $surname, $role)
    {
        echo "Hello " . $role . " " . $name . " " . $surname . ".You can do everything on the site";
    }
    public function draw_panel()
    {
        echo '
        <div>
        <a href="pages/admin.php">Page Admin</a> <br>  
        <a href="pages/manager.php">Page Manager</a><br>
        <a href="pages/client.php">Page Client</a><br>
        </div>';
    }
}

class Manager
{

    public function Hello($name, $surname, $role)
    {
        echo "Hello " . $role . " " . $name . " " . $surname . ".
        You can change, delete and create clients on the site";
    }
    public function draw_panel()
    {
        echo '
        <div>
    
        <a href="pages/manager.php">Page Manager</a><br>
        <a href="pages/client.php">Page Client</a>
        </div>';
    }
}
function ChangeClass()
{
    if ($_SESSION['USER']['role'] == "Администратор" || $_SESSION['USER']['role'] == "Адміністратор") {
        $_SESSION['USER']['role'] = "Admin";
    }
    if ($_SESSION['USER']['role'] == "Менеджер" || $_SESSION['USER']['role'] == "Менеджер") {
        $_SESSION['USER']['role'] = "Manager";
    }
    if ($_SESSION['USER']['role'] == "Клиент" || $_SESSION['USER']['role'] == "Клієнт") {
        $_SESSION['USER']['role'] = "Client";
    }
};
function CheckSession()
{
    if (!isset($_SESSION['USER'])) {
        header("Location: ../../");
    }
}
if (isset($_SESSION['USER'])) {
    ChangeClass();
    switch ($_SESSION['USER']['role']) {
        case "Admin": {
                $user = new Admin();
                break;
            }
        case "Manager": {
                $user = new Manager();
                break;
            }
        case "Client": {
                $user = new Client();
                break;
            }
    }
}
