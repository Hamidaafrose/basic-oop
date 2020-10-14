<!-- interface-2 -->
<?php
require 'vehicle.php';

class Car implements Vehicle{
    public function display(){
        return 'welcome';
    }
    public function capacity(){
        return 12;
    }
    public function fuelAmount(){
        //Car class er nijer function
    }
}

$car = new Car;
echo $car->capacity();