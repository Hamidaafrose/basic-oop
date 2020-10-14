<?php
//multilevel inheritance
require "car.php";
class NewCar extends Car{

}
$newcar = new NewCar;
echo $newcar->applyBrakes();