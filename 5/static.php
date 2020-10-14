<?php
class Person{

    public static $name = 'Hamida';
    public static function display(){
        echo 'welcome to Ctg';
    }
    // public function test(){
    //     echo 'Hello'.'<br>';
    // }
    public function getName(){
        return self::$name;
    }

}

// $person = new Person();
// $person->test();

//obj create na kore staticfunc ke call kora jai
Person::display();
echo '<br>';
echo Person::$name;
echo '<br>';

Person::$name='Fatima';

$obj = new Person;
$obj2 = new Person;

echo 'from object1: '.$obj->getName().'<br>';
echo 'from object2: '.$obj2->getName().'<br>';