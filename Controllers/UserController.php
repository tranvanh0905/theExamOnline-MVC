<?php
require_once "Models/UserModel.php";
class UserController
{
    public function insertAccount()
    {
        $model  = new User();
        $columns = " ";
        $values = " ";
        foreach($_POST as $key => $value)
        {
            $columns .= " " .$key .",";
            $values .= "'" .$value ."',";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");
        $sqlQuery = "insert into " .$model->table
                    . "($columns) values ($values)";
        User::rawQuery($sqlQuery);
        header("Location:thong-tin");
    }
}