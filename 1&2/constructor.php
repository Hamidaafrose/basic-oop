<?php

// class Foo{
//     public function __construct(){
//         echo " Hello! um Foo from contructor func.";
//     }

//     public function display(){
//         echo "Welcome to Foo";
//     }
// }

// $foo = new Foo();   //if I create an objct of a class then construct func will work automatically.
// echo "<br>";
// echo $foo->display();

#construct func with value
class Math{
    public $a;
    public $b;

    public function __construct($first,$second){
        $this->a = $first;
        $this->b = $second;
        $this->display();
    }

    // public function set_val($first,$second){
    //     $this->a = $first;
    //     $this->b = $second;
    // }

    public function sum(){
        return $this->a + $this->b;
    }
    public function mul($c = 3){
        return $this->a * $this->b * $c;
    }
    public function display(){
        echo "Here u go : ";
    }
}

$obj= new Math(10,20); //ei values gulo __constructor func er jonno kaj korto by default.
// echo $obj->set_val(2,2);
echo $obj->sum();
echo"<br>";
$obj2 = new Math(10,5);
echo $obj2->sum();
echo"<br>";
// echo $obj2->mul(2);
echo $obj2->mul();