<?php
class Vehicle{
    public $capacity;
    public $fuelAmount;

    public function __construct($capa,$fuelAm){
        $this->capacity = $capa;
        $this->fuelAmount = $fuelAm;
    }

    public function capacity(){
        return $this->capacity;
    }

    public function fuelAmount(){
    return $this->fuelAmount;
    }

    public function applyBrakes(){
        return 'Braked at 5pm';
    }

}