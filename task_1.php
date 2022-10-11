<?php

    //task1
    function checkNumber1(int $inputNumber)
    {
        if ($inputNumber > 30)
            return 'More than 30';
        if ($inputNumber > 20)
            return 'More than 20';
        if ($inputNumber > 10)
            return 'More than 10';
        else
            return 'Equal or less than 10';
    }

    function checkNumber2(int $inputNumber)
    {
        switch($inputNumber)
        {
            case ($inputNumber > 30):
                return 'More than 30';
            case ($inputNumber > 20):
                return 'More than 20';
            case ($inputNumber > 10):
                return 'More than 10';
            default:
                return 'Equal or less than 10';
        }
    }   

    function checkNumber3(int $inputNumber)
    {
        return ($inputNumber > 20) ? (($inputNumber > 30) ? 'More than 30': 'More than 20') :
            (($inputNumber > 10) ? 'More than 10': 'Equal or less than 10');
    } 

    $a = [11, 22, 33, 40, -5, 19, 10, 25];
    foreach($a as $i) 
    {
        echo($i)."\n";
        echo(checkNumber1($i)."\n");
        echo(checkNumber2($i)."\n");
        echo(checkNumber3($i)."\n");
        echo "\n";
    }
?>