<?php
require_once 'Utils/Helper.php';

class SimpleDetail extends Detail
{
    public $price;
    public $weight;

    public function input() {
        parent::input();
        $price = "Enter detail price: ";
        $this->price = Helper::inputValidation($this->price, $price);

        $weight = "Enter detail weight: ";
        $this->weight = Helper::inputValidation($this->weight, $weight);
    }

    public function output() {
        parent::output();
        echo "Detail price: ".$this->price."\n";
        echo "Detail weight: ".$this->weight."\n";
    }

    public function WeightCalc() {
        parent::WeightCalc();
    }

    public function PriceCalc() {
        parent::PriceCalc();
    }


}