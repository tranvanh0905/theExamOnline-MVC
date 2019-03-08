<?php
class HomeController
{
    public function index()
    {
        global $baseUrl;
        include "Views/homepage.php";
    }

    public function page()
    {
        global $baseUrl;
        include "Views/information.php";
    }

    public function exam()
    {
        global $baseUrl;
        include "Views/exam.php";
    }
    
}