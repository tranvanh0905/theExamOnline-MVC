<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "localhost/theExam/";
require_once "./Controllers/HomeController.php";
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
    default:
    echo "404 page not found";
}