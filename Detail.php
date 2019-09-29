<?php
require_once 'Utils/Helper.php';

class Detail
{
    public $code;
    public $name;

    public function input() {
        $code = "Enter detail code: ";
        $name = "Enter detail name: ";

        $this->code = Helper::textValidation($this->price, $code);
        $this->name = Helper::textValidation($this->weight, $name);
    }
    public function output() {
        echo "Detail code: ".$this->code."\n";
        echo "Detail name:  ".$this->name."\n";
    }

    public function WeightCalc() {}

    public function PriceCalc() {}
}