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
            $columns .= "" .$key .",";
            $values .= "'" .$value ."',";
        }
        $coulmns = rtrim($coulmns,",");
        $values = rtrim($values,",");
        $sqlQuery = "insert into " .$model->table
                    . " ($columns) values ($values)";
        Question::rawQuery($sqlQuery);
        return $this->addChoice();
    }

    public function addChoice()
    {
        $model = new Choice();
        $columns = " ";
        $values = " ";
        $post = $_POST['content'];

        foreach($_POST['content'] as $key=>$value)
        {
            $columns .= "" .$key .",";
            $values .= "'" .$value ."',";
            var_dump($columns);
        }


        foreach($_POST as $key=>$value)
        {
            if($key == 'title')
            {
                continue;
            }
            
            $columns .= "" .$key .",";
            $values .= "'" .$value ."',";
        }
        $coulmns = rtrim($coulmns,",");
        $values = rtrim($values,",");
        $sqlQuery = "insert into " .$model->table
                    . " ($columns) values ($values)";
        Choice::rawQuery($sqlQuery);
    }

}