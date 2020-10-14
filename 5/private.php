<?php
class PrivateClass{
    private $result = 10;

    public function getresult(){
        return $this->result;
    }


}

$obj = new PrivateClass();
echo $obj->getresult();