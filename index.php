<?php

class Student
{
    public $name;
    public $attandence;
    public $totalMarks;
    
    public function StuDetails($name,$attandence,$totalMarks){
        $this->name = $name;
        $this->attandence = $attandence;
        $this->totalMarks = $totalMarks;
    }
}

$mostak = new Student();
$mostak->StuDetails('Mostak', true, 89);
// $mostak->name = "Shahid";
echo $mostak->name;