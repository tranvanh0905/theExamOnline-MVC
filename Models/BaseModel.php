<?php
class BaseModel
{
    // connect to database 
    function __construct()
    {
        $this->connect = new PDO("mysql:host=localhost;dbname=exam;charset=utf8","root","");
    }
    public static function where($column, $operation, $value)
    {
        $model = new static();
        $model->queryBuilder = "select * from " .$model->table
                                . " where $column $operation '$value'";
        return $model;
    }
    public static function all()
    {
        $model = new static();
        $model->queryBuilder = "select * from " .$model->table;
        return $model;
    }
    public function get()
    {
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
    }

}