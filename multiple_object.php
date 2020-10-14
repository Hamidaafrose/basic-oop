<?php
class Student{
    public $id =10;
    public $group = 'science';
}

$Sia = new Student();
$Sia->id=22;
echo $Sia->id;
echo "<br>";
$Ria = new Student();
echo $Ria->id;
