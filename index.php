<?php

//trying out class properties
class Student
{
    public $name;
    public $attendance;
    public $total_mark;

    public function StudentDetails($name, $attendance, $total_mark)
    {
        $this->name = $name;
        $this->attendance = $attendance;
        $this->total_mark = $total_mark;
    }
}

$student = new Student();
$student->StudentDetails('Ezekiel', true, 90);
echo $student->total_mark;