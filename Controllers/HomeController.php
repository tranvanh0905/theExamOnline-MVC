<?php
require_once "./Models/UserModel.php";
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
    
    public function loginTo()
    {
        global $baseUrl;
        extract($_POST);
        $usernameLogin  = User::where("username","=",$username)->first();
        if($usernameLogin != null)
        {
            $_SESSION['auth']=[
                "id"=>$usernameLogin->id,
                "username"=>$usernameLogin->username,
                "email"=>$usernameLogin->email,
                "role"=>$usernameLogin->role,
            ];
            header("Location:./thong-tin");die;
        }
        header("location:./");
    }
}