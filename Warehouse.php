<?php
require_once 'Utils/Helper.php';

class Warehouse extends Machine
{
    public $warehouseName;
    public $amountMachine;
    public $listMachine= [];
    public $machine = array();

    public function inputMachine() {
        echo "================= Import machine into Warehouse ================= \n";

        $name = "Enter warehouse name: ";
        $this->warehouseName = Helper::textValidation($this->warehouseName, $name);

        $amount = "Machine amount: ";
        $this->amountMachine = Helper::inputValidation($this->warehouseName, $amount);

        for($i = 0; $i < $this->amountMachine; $i++) {
            $machine[$i] = new Machine();
            $machine[$i]->input();
            $this->listMachine[] = $machine[$i];
            $List[] = $machine[$i];
        }
    }

    public function outputMachine() {
        echo $this->warehouseName."\n";
        foreach ($this->listMachine as $key => $list) {
            echo "No." . ($key + 1) . str_repeat("-", 100) . "\n";
            echo $list->output() . "\n";
        }
    }

    public function findMachine() {
        echo "================ Find machine ================\n";
        $find = readline('Enter machine code: ');
        foreach ($this->listMachine as $machine) {
           if($machine->machineCode == $find) {
               echo str_repeat("-", 100) . "\n";
               echo "| Has found!!\n";
               echo "|      Machine code: " . $machine->machineCode;
               echo "|      Machine name: " . $machine->machineName;
               echo str_repeat("-", 100) . "\n";
           } else {
               echo "404 not found =))";
               break;
           }
        }
    }
}

$test = new Warehouse();
$test->inputMachine();