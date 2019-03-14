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
        $userLogin = User::where("username","=",$_SESSION['auth']['username'])->first();
        $theExam = Exam::all()->get();
        include "Views/information.php";
    }

    public function exam()
    {
        global $baseUrl;
        $ques = Question::where("id_exam","=","1")->get();
        include "Views/exam.php";
    }
    
    public function registerPage()
    {
        global $baseUrl;
        include "Views/register.php";
    }

    public function addExamCatePage()
    {
        global $baseUrl;
        include "Views/addExamCategories.php";
    }

    public function addQuestionAndAnswer()
    {
        global $baseUrl;
        $exam = Exam::all()->get();
        include "Views/addQuestionAndAnswer.php";
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
                "phone_number"=>$usernameLogin->phone_number,
                "birthdate"=>$usernameLogin->birthdate,
            ];
            header("Location:./thong-tin");die;
        }
        header("location:./?msg=Vui lòng xem lại tài khoản và mật khẩu");
    }
}