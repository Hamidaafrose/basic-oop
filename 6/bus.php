<!-- interface-1 -->
<?php
require 'vehicle.php';

class Bus implements Vehicle{
    public function display(){
        return 'welcome  ';
    }
    public function capacity(){
        return 25;
    }
    public function brake(){
        //bus class er nijer function
    }
}

$bus = new Bus;
echo $bus->capacity();