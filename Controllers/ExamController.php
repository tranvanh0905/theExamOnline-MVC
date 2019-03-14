<?php
require_once "Models/ExamModel.php";
require_once "Models/ExamCategoriesModel.php";
require_once "Models/QuestionModel.php";
require_once "Models/ChoiceModel.php";
class ExamController
{

    public function addExamCategories()
    {
        $model = new ExamCategories();
        $columns = " ";
        $values = " ";
        foreach($_POST as $key=>$value)
        {
            $columns .= "" .$key .",";
            $values .= "'" .$value ."',";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");
        $sqlQuery = "insert into " .$model->table
                    ." ($columns) values ($values)";
        ExamCategories::rawQuery($sqlQuery);
    }
    
    public function addExam()
    {
        $model = new Exam();
        $columns = " ";
        $values = " ";
        foreach($_POST as $key=>$value)
        {
            $columns .= "" .$key .",";
            $values .= "'" .$value ."',";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");
        $sqlQuery = "insert into " .$model->table
                    ." ($columns) values ($values)";
        Exam::rawQuery($sqlQuery);
    }

    public function addQuestion()
    {
        $model = new Question();
        $columns = " ";
        $values = " ";
        foreach($_POST as $key=>$value)
        {
            if($key == "id_question" || $key == "content")
            {
                continue;
            }
            $columns .= "" .$key .",";
            $values .= "'" .$value ."',";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");
        $sqlQuery = "insert into " .$model->table
                    . " ($columns) values ($values)";
        Question::rawQuery($sqlQuery);
        return $this->addChoice();
    }
    
    public function addChoice()
    {
        $model = new Choice();
        $id_ques  = Question::all()->orderBy('id','DESC')->first();
        $columns = " ";
        $values = " ";
        foreach($_POST as $key=>$value)
        {
            if($key == "id_exam" || $key == "title" || $key == "correct")
            {
                continue;
            }
            $columns .= " " .$key .",";
            if($key == "content")
            {
                for($i = 0; $i<4; $i++)
                {
                    $values .= "('" .$value[$i] ."','" .$id_ques->id ."'),";
                }
            }
        }
        $columns  = rtrim($columns,",");
        $values  = rtrim($values,",");
        $sqlQuery = "insert into " .$model->table
                . " ($columns) values " .$values;
        Choice::rawQuery($sqlQuery); 
        var_dump($sqlQuery);die;
        header("location:them-cau-hoi?msg=Thêm thành công");
    }
    
    public function letStart()
    {
        $_SESSION['score'] = 0;
        
    }
}