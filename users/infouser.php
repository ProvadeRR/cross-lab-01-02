<?php 
$indexUrl = $_SERVER["REQUEST_URI"] == "/";
$adminUrl = $_SERVER["REQUEST_URI"] == "/users/admin.php";
$managerUrl = $_SERVER["REQUEST_URI"] == "/users/manager.php";
$clientUrl = $_SERVER["REQUEST_URI"] == "/users/client.php";
if($indexUrl)
{
    include "classes.php";
    include "database/Users.php";
}
if($adminUrl || $managerUrl || $clientUrl)
{
    include "../classes.php";
    include "../database/Users.php";
    if(empty($_SESSION['lang']))
    {
        header("Location: ../index.php");
    }
    if (!isset($_SESSION['id'])) {
        header("Location: ../index.php");
    }
}
foreach($USERS as $key=>$user)
{
    if($_SESSION['id'] == $key)
    {
       $name = $user['name'];
       $surname = $user['surname'];
       $role = $user['role'];
       switch($role){
           case 1:{
            $obj = new Client($name, $surname);
            break;
            }
           case 2:{
            $obj = new Manager($name, $surname);
            break;
            }
            case 3:{
            $obj = new Admin($name,$surname);
            break;
        }
       }
    }
}