<?php
require "vehicle.php";
class Truck extends Vehicle{
    
    public function display(){
        echo 'capacity is: '.$this->capacity.'<br>';
        $this->capacity = '3 people in truck'.'<br>';
        echo "---this is all about Truck.".'<br>';
    }
    public function message(){
        parent::message();
        return '<br>'.'This is truck.';
    }

}
$truck = new Truck();

echo $truck->fuelAmount();
echo "<br>";
echo $truck->applyBrakes()."<br>";
echo $truck->capacity()."<br>";

$truck->display();
$truck->display();

#problem here
// $truck->capacity='20 people in back';
// echo $truck->capacity();

echo $truck->message();