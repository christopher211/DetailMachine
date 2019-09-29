<?php

class Helper
{
    public static function inputValidation($param ,$messInput) {
        do {
            $paramInput = readline("$messInput");

            if(is_numeric($paramInput)) {
                $paramInput += 0;
            }

            if(!is_numeric($paramInput)) {
                echo "Error !! Please try again (Number only) \n";
            }  elseif (!is_int($paramInput)) {
                echo "Error !! Please try again (Natural number only) \n";
            }  elseif ($paramInput <= 0 ) {
                echo "Error !! Please try again (Number must be greater than 0)\n";
            }  elseif ($paramInput == '' ) {
                echo "Error !! Please try again (Cannot be empty)\n";
            }  else {
                $param = $paramInput;
            }

        } while(!is_numeric($paramInput) || $paramInput == '' || $paramInput <= 0 || !is_int($paramInput));
        return $param;
    }

    public static function textValidation($param,$messInput) {
        do {
            $pattern = "/([\|\+()=@^&!%\$#\*]+)/";
            $paramInput = readline("$messInput");
            if($paramInput == '') {
                echo "Error !! Please try again (Cannot be empty)\n";
            } else if (preg_match($pattern, $paramInput )) {
                echo "Error !! Please try again (Cannot contain symbol)\n";
            } else {
                $param = $paramInput;
            }
        } while($paramInput == '' || preg_match($pattern, $paramInput ));
        return $param;
    }

}
