<?php
class A{
    const PI = 3.1416;

    public function area($r){
        // return self::PI * $r *$r;
        return A::PI * $r *$r;
    }

}
echo A::PI;
echo "<br/>";

$ar = new A();
echo $ar->area(2);