<?php

    //task3
    function digitsSum(int $d)
    {     
        $d = abs($d);
        $new_d = 0;
        do
        {
            $new_d = 0;
            while($d > 0)
            {
                $new_d += $d % 10;
                $d = floor($d / 10);
            }
            $d = $new_d;
        }
        while ($new_d >= 10);
        return $new_d;          
    }
    echo (5689)."\n";    echo digitsSum(5689)."\n";
    echo (-5689)."\n";   echo digitsSum(-5689)."\n";
    echo (1231)."\n";    echo digitsSum(1231)."\n";
?>