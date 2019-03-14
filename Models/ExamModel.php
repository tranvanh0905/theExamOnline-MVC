<?php
class Exam extends BaseModel
{
    public $table = "exam";

    public function getExamCategories()
    {
        $examCate = ExamCategories::where("id","=",$this->id_exam_categories)->get();
        return $examCate[0];
    }
}