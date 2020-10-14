<!-- Abstract -->
<?php

abstract class Vehicle {
    public function display(){
        return 'Welcome';
    }
    abstract public function capacity();
}