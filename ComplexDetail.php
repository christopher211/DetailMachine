<?php
require_once 'Utils/Helper.php';

class ComplexDetail extends SimpleDetail
{
    public $listDetail = array();
    public $detailAmount;
    public $detailType;


    public $tongtien;
    public $tongkhoiluong;

    public function input() {
        // parent::input();
        $amount = "Enter amount of detail: ";
        $this->detailAmount = Helper::inputValidation($this->detailAmount, $amount);

        for ($i=0; $i < $this->detailAmount; $i++) {
            $text = "Detail: complex or simple? [1. Simple detail] [2. Complex detail]";
            $this->detailType = Helper::inputValidation($this->detailType, $text);

            $detail= null;

            if ($this->detailType == 1) {
                $detail= new SimpleDetail();
            } else {
                $detail= new ComplexDetail();
            }
            $detail->input();
            $this->listDetail[] = $detail;
        }
    }

    public function output() {
        //parent::output();
        foreach ($this->listDetail as $detail) {
            $detail->output();
            echo str_repeat("-", 104) . "\n";
        }
    }

    public function A() {
        $price = 0;
        foreach ($this->listDetail as $detail) {
            $price += $detail->PriceCalc();
        }
        echo $price;
    }

    public function B(){
        $weight = 0;
        foreach ($this->listDetail as $detail) {
            $weight += $detail->WeightCalc();
        }
        echo $weight;
    }
}

