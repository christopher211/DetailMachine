<?php
require_once 'Utils/Helper.php';

class Machine extends ComplexDetail
{
    public $machineCode;
    public $machineName;
    public $weight;
    public $price;
    public $list;
    public $listDetail = array();

    public function input() {
        $code = "Machine code: ";
        $name = "Machine name: ";
        $weight = "Machine weight: ";
        $price = "Machine price: ";

        $this->machineCode = Helper::textValidation($this->machineCode, $code);
        $this->machineName = Helper::textValidation($this->machineName, $name);
        $this->weight = Helper::inputValidation($this->weight, $weight);
        $this->price = Helper::inputValidation($this->price, $price);

        $this->list = new ComplexDetail();
        $this->list->input();
    }

    public function output() {
        echo "|     Machine specifications: \n";
        echo "|         Machine code: " . $this->machineCode. "\n";
        echo "|         Machine name: " . $this->machineName. "\n";
        echo "|         Machine weight: " . $this->weight. "\n";
        echo "|         Machine price: " . $this->price."\n";
        echo str_repeat("-", 104) . "\n";

        echo "========== List machine detail =========\n";
        echo $this->list->ouput();
    }

    public function getMaSo() {
        return $this->machineCode;
    }
}
