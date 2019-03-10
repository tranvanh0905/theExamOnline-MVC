<?php
session_start();
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "localhost/theExam/";
require_once "./Controllers/HomeController.php";
require_once "./Controllers/UserController.php";
switch($url)
{
    case "/":
    $controller = new HomeController();
    echo $controller->index();
    break;
    case "thong-tin":
    $controller = new HomeController();
    echo $controller->page();
    break;
    case "bai-thi":
    $controller = new HomeController();
    echo $controller->exam();
    break;
    case "login":
    $controller = new HomeController();
    echo $controller->loginTo();
    break;
    case "dang-ky":
    $controller  = new HomeController();
    echo $controller->registerPage();
    break;
    case "register":
    $controller = new UserController();
    echo $controller->insertAccount();
    break;
    default:
    echo "404 page not found";
}