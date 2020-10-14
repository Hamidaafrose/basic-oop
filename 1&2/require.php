<?php

require "many_classes.php";

$a = new A();
$b = new B();

$a->wel();
echo "<br>";
$b->bye();
echo "<br>";

//checking an object is instance of which class
$obj = new A();

if($a instanceof A){
    $obj->wel();
}
