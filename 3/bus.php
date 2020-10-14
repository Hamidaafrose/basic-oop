<?php
require "vehicle.php";
class Bus extends Vehicle{
    public function display(){
        echo 'Bus capacity is: '.$this->capacity.'<br>';
        echo "---this is all about Bus.";
    }
    //func override
    public function fuelAmount(){
        return 60;
    }
}
$bus = new Bus();
// echo $bus->capacity()."<br>";
echo $bus->applyBrakes()."<br>";
$bus->display();
echo "<br>";
echo 'fuel amount:'. $bus->fuelAmount();