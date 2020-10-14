<?php
class Vehicle{
    public $capacity = '30 people';

    public function fuelAmount(){
        return '39L';
    }
    public function capacity(){
    return 'Min 5 people in car ';
    }
    public function applyBrakes(){
        return 'Braked at 5pm';
    }
    public function message(){
        echo '<br>'.'Welcome to vehicle';
    }

}