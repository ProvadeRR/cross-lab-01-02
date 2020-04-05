<?php
session_start();
if (!isset($_SESSION['USER'])) {
     header("Location: ../");
}

class User
{
    public $pageAdmin = "pages/admin.php";
    public $pageManager = "pages/manager.php";
    public $pageClient = "pages/client.php";
}
class Client extends User
{
    public function Hello($name, $surname)
    {
        $language = [
            'ru' => "Здравствуйте Клиент " . $name . " " . $surname . ".Вы можете на сайте просматривать информацию доступную пользователям",
            'uk' => "Доброго дня Клієнт " . $name . " " . $surname . ".Ви можете на сайті переглядати інформацію доступну користувачам",
            'en' =>  "Hello Client " . $name . " " . $surname . ".You can view the information available to users on the site",
        ];
        return $language;
    }

    public function draw_panel()
    {
        $language = [
            "ru" => '<br><a href="pages/client.php">Страница Клиента</a>',
            "uk" => '<br><a href="pages/client.php">Cторінка Клієнта</a>',
            "en" => '<br><a href="pages/client.php">Page Client</a>',
        ];
        return $language;
    }
}
class Admin extends User
{
    public function Hello($name , $surname)
    {
        $language = [
            "ru" => "Здравствуйте Администратор " . $name . " " . $surname . ".Вы можете на сайте делать все",
            "uk" => "Доброго дня Aдміністратор " . $name . " " . $surname . ".Ви можете на сайті робити все</p>",
            "en" => "Hello Admin " . $name . " " . $surname . ".You can do everything on the site",
        ];
        return $language;
    }
    public function draw_panel()
    {
        $language = [
            "ru" => 
            "<div><a href=$this->pageAdmin>Cтраница Администратора</a><br>
            <a href=$this->pageManager>Страница Менеджера</a><br>
            <a href=$this->pageClient>Страница Клиента</a><br></div>",
            "uk" =>
            "<div><a href=$this->pageAdmin>Cторінка Aдміністратора</a><br>
            <a href=$this->pageManager>Cторінка Менеджера</a><br>
            <a href=$this->pageClient>Cторінка Клієнта</a><br></div>",
            "en" =>
            "<div><a href=$this->pageAdmin>Page Admin</a><br>
            <a href=$this->pageManager>Page Manager</a><br>
            <a href=$this->pageClient>Page Client</a><br></div>",
        ];
        return $language;
    }
}
class Manager extends User
{
    public function Hello($name , $surname)
    {
        $language = [
            "ru" => "Здравствуйте Менеджер " . $name . " " . $surname . ".Вы можете на сайте изменять,удалять и создавать клиентов",
            "uk" => "Доброго дня Менеджер " . $name . " " . $surname . ".Ви можете на сайті змінювати, видаляти і створювати клієнтів",
            "en" => "Hello Manager " . $name . " " . $surname . ".You can change, delete and create clients on the site",
        ];
        return $language;
    }
    public function draw_panel(){
        $language = [
            "ru" => 
            "<div><a href=$this->pageManager>Страница Менеджера</a><br>
            <a href=$this->pageClient>Страница Клиента</a><br></div>",
            "uk" =>
            "<div><a href=$this->pageManager>Cторінка Менеджера</a><br>
            <a href=$this->pageClient>Cторінка Клієнта</a><br></div>",
            "en" =>
            "<div><a href=$this->pageManager>Page Manager</a><br>
            <a href=$this->pageClient>Page Client</a><br></div>",
        ];
        return $language;
    }
}