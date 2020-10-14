<?php
require 'vendor/autoload.php';

//App\foldername\classname
use App\test\Bus;

$obj = new App\test\Vehicle();
$obj->fuelAmount();

$bus = new Bus();
$bus->test();
$bus->message();
