<?php
require_once 'Detail.php';
require_once 'SimpleDetail.php';
require_once 'ComplexDetail.php';
require_once 'Machine.php';
require_once 'Warehouse.php';

function Menu() {

    echo "\e[0;30;44m ======================================== MACHINE MANAGEMENT ======================================== \e[0m \n";

    echo "\e[34m **************************************** Warehouse function: *************************************** \e[0m \n";
    echo "\e[34m 1. Add machine \e[0m \n";
    echo "\e[34m 2. Adding more detail for machine \e[0m \n";
    echo "\e[34m 3. Find machine in warehouse \e[0m \n\n";

    echo "\e[32m ****************************************** Detail function ***************************************** \e[0m \n";
    echo "\e[32m 4. Add simple detail \e[0m \n";
    echo "\e[32m 5. Add complex detail \e[0m \n\n";

    echo "\e[31m **************************************************************************************************** \e[0m \n";
    echo "\e[31m 0. Exit! \e[0m \n";

    $select = readline("Choose function :");
    echo $select;

    if (is_int($select)) {
        switch ($select) {
            case 1:
            {
                $warehouse = new Warehouse();
                $warehouse->inputMachine();
                $warehouse->outputMachine();
                $warehouse->findMachine();
                break;
            }
            case 2:
            {
                $machine = new Machine();
                $machine->input();
                $machine->output();
                break;
            }
            case 3:
            {
                $warehouse = new Warehouse();
                $warehouse->outputMachine();
                $warehouse->findMachine();
                break;
            }
            case 4:
            {
                $simple = new SimpleDetail();
                $simple->input();
                $simple->output();
                break;
            }
            case 5:
            {
                $complex = new ComplexDetail();
                $complex->input();
                $complex->output();
                break;
            }
            Default:
            {
                $select = readline("Please try again !!");
            }
        }
    } else {
        echo 'Error input, please try again!! (Only accept natural number)';
    }
}

Menu();