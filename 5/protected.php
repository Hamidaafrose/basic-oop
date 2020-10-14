<?php

    class Mom{
        //  private $money = 30;
        protected $money = 30;

        public function moneyStatus(){
            return $this->money.'  taka';
        }

    }

    class Children extends Mom{
        public function updateMoney(){
        $this->money = 20;
        }
    }

    $children = new Children();
    echo $children->moneyStatus().'<br/>';

    $children->updateMoney();
    echo $children->moneyStatus();

    // echo $children->money;