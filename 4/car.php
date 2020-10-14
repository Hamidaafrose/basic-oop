<?php
require "vehicle.php";

class Car extends Vehicle{
    public $color;
    public function __construct($capa,$fuelAm,$col){
        parent::__construct($capa,$fuelAm);
         $this->color = $col;
    }
}

$car = new Car(5,4,'red');
echo $car->capacity().'<br>';
echo $car->fuelAmount().'<br>';
echo $car->color.'<br>';


 
// $car = new Car();
// echo $car->fuelAmount();
// echo "<br>";
// echo $car->capacity()."<br>";
// echo $car->applyBrakes()."<br>";
// $car->display();
