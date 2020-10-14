<?php
require "vehicle.php";
class Car extends Vehicle{
    public function display(){
        echo "---this is all about car.";
    }
}
// $car = new Car();
// echo $car->fuelAmount();
// echo "<br>";
// echo $car->capacity()."<br>";
// echo $car->applyBrakes()."<br>";
// $car->display();
