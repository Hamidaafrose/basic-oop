<?php

//class declare 
class Student{
    public $id = 2;
    public $name = 'Ria';
}

//object declare
$student = new student();
echo $student->id;
// echo $student->name;
$student->name='Dipa';
echo "<br>";
echo $student->name;