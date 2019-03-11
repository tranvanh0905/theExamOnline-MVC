<?php
session_start();
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "localhost/theExam/";
require_once "./Controllers/HomeController.php";
require_once "./Controllers/UserController.php";
require_once "./Controllers/ExamController.php";
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
    case "them-mon-hoc":
    $controller = new HomeController();
    echo $controller->addExamCatePage();
    break;
    case "addExamCategories":
    $controller = new ExamController();
    echo $controller->addExamCategories();
    break;
    case "them-cau-hoi":
    $controller = new HomeController();
    echo $controller->addQuestionAndAnswer();
    break;
    case "addQuestion":
    $controller = new ExamController();
    echo $controller->addQuestion();
    break;
    default:
    echo "404 page not found";
}