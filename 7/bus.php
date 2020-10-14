<?php
require 'vehicle.php';

class Bus extends Vehicle{

    public function capacity(){
        return 25;
    }
    public function brake(){
        //bus class er nijer function
    }
}

$bus = new Bus;
echo $bus->capacity().'<br>';
echo $bus->display();