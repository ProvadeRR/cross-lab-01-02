<?php
session_start();
if (!isset($_SESSION['USER'])) {
     header("Location: ../");
    }
class Client
{
    public function HelloUK($name, $surname, $role)
    {
        echo "Доброго дня " . $role . " " . $name . " " . $surname . ".Ви можете на сайті переглядати інформацію доступну користувачам";
    }
    public function HelloRU($name, $surname, $role)
    {
        echo "Здравствуйте " . $role . " " . $name . " " . $surname . ".Вы можете на сайте просматривать информацию доступную пользователям";
    }
    public function HelloEN($name, $surname, $role)
    {
        echo "Hello " . $role . " " . $name . " " . $surname . ".You can view the information available to users on the site";
    }
    public function draw_panelUK()
    {
        echo '<br><a href="pages/client.php">Cторінка Клієнта</a>';
    }
    
    public function draw_panelRU()
    {
        echo '<br><a href="pages/client.php">Страница Клиента</a>';
    }
    public function draw_panelEN()
    {
        echo '<br><a href="pages/client.php">Page Client</a>';
    }
   
}

class Admin
{
    public function HelloUK($name, $surname, $role)
    {
        echo "<p>Доброго дня " . $role . " " . $name . " " . $surname . ".Ви можете на сайті робити все</p>";
    }
    public function HelloRU($name, $surname, $role)
    {
        echo "Здравствуйте " . $role . " " . $name . " " . $surname . ".Вы можете на сайте делать все";
    }

    public function HelloEN($name, $surname, $role)
    {
        echo "Hello " . $role . " " . $name . " " . $surname . ".You can do everything on the site";
    }
    public function draw_panelUK()
    {
        echo '
        <div>
        <a href="pages/admin.php">Cторінка Aдміністратора</a><br>
        <a href="pages/manager.php">Cторінка Менеджера</a><br>
        <a href="pages/client.php">Cторінка Клієнта</a><br>
        </div>';
    }
    public function draw_panelRU()
    {
        echo '
        <div><br>
        <a href="pages/admin.php">Страница Администратора</a><br>
        <a href="pages/manager.php">Страница Менеджера</a><br>
        <a href="pages/client.php">Страница Клиента</a>
        </div>';
    }
    public function draw_panelEN()
    {
        echo '
        <div><br>
        <a href="pages/admin.php">Page Admin</a> <br>  
        <a href="pages/manager.php">Page Manager</a><br>
        <a href="pages/client.php">Page Client</a>
        </div>';
    } 
}

class Manager
{
    public function HelloUK($name, $surname, $role)
    {
        echo "Доброго дня " . $role . " " . $name . " " . $surname . ".Ви можете на сайті змінювати, видаляти і створювати клієнтів";
    }
    public function HelloRU($name, $surname, $role)
    {
        echo "Здравствуйте " . $role . " " . $name . " " . $surname . ".Вы можете на сайте изменять,удалять и создавать клиентов";
    }
    public function HelloEN($name, $surname, $role)
    {
        echo "Hello " . $role . " " . $name . " " . $surname . ".
        You can change, delete and create clients on the site";
    }
    public function draw_panelUK()
    {
        echo '
        <div><br>
        <a href="pages/manager.php">Cторінка Менеджера</a><br>
        <a href="pages/client.php">Cторінка Клієнта</a>
        </div>';
    }
    public function draw_panelRU()
    {
        echo '
        <div><br>
        <a href="pages/manager.php">Страница Менеджера</a><br>
        <a href="pages/client.php">Страница Клиента</a>
        </div>';
    }
    public function draw_panelEN()
    {
        echo '
        <div><br>
        <a href="pages/manager.php">Page Manager</a><br>
        <a href="pages/client.php">Page Client</a>
        </div>';
    }
}
if($_SERVER['REQUEST_URI'] == "/users/ru/profile.php")
{
    if ($_SESSION['USER']['role'] == "Admin" || $_SESSION['USER']['role'] == "Адміністратор" || $_SESSION['USER']['role'] =="Администратор") {
        $_SESSION['USER']['role'] = "Администратор";
        $user = new Admin();
    }
    if ($_SESSION['USER']['role'] == "Manager" || $_SESSION['USER']['role'] == "Менеджер" || $_SESSION['USER']['role'] == "Менеджер") {
        $_SESSION['USER']['role'] = "Менеджер";
        $user = new Manager();
    }
    if ($_SESSION['USER']['role'] == "Client" || $_SESSION['USER']['role'] == "Клієнт" || $_SESSION['USER']['role'] == "Клиент") {
        $_SESSION['USER']['role'] = "Клиент";
        $user = new Client();
    }
}
if($_SERVER['REQUEST_URI'] == "/users/en/profile.php")
{
    if ($_SESSION['USER']['role'] == "Admin" || $_SESSION['USER']['role'] == "Адміністратор" || $_SESSION['USER']['role'] =="Администратор") {
        $_SESSION['USER']['role'] = "Admin";
        $user = new Admin();
    }
    if ($_SESSION['USER']['role'] == "Manager" || $_SESSION['USER']['role'] == "Менеджер" || $_SESSION['USER']['role'] == "Менеджер") {
        $_SESSION['USER']['role'] = "Manager";
        $user = new Manager();
    }
    if ($_SESSION['USER']['role'] == "Client" || $_SESSION['USER']['role'] == "Клієнт" || $_SESSION['USER']['role'] == "Клиент") {
        $_SESSION['USER']['role'] = "Client";
        $user = new Client();
    }
}
if($_SERVER['REQUEST_URI'] == "/users/uk/profile.php")
{
    if ($_SESSION['USER']['role'] == "Admin" || $_SESSION['USER']['role'] == "Адміністратор" || $_SESSION['USER']['role'] =="Администратор") {
        $_SESSION['USER']['role'] = "Адміністратор";
        $user = new Admin();
    }
    if ($_SESSION['USER']['role'] == "Manager" || $_SESSION['USER']['role'] == "Менеджер" || $_SESSION['USER']['role'] == "Менеджер") {
        $_SESSION['USER']['role'] = "Менеджер";
        $user = new Manager();
    }
    if ($_SESSION['USER']['role'] == "Client" || $_SESSION['USER']['role'] == "Клієнт" || $_SESSION['USER']['role'] == "Клиент") {
        $_SESSION['USER']['role'] = "Клієнт";
        $user = new Client();
    }

}
