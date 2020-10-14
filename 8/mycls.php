<!-- Trait -->
<?php
require "foo.php";
require "bar.php";
require "parentcls.php";

class MyCls extends ParentCls {
    use Foo, Bar;

    public function hello(){
        $this->message();
    }
}

$obj= new MyCls;
$obj->display();
// $obj->message();

$obj->ok();
$obj->hello();
