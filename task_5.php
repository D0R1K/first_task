<?php
    
    //task5
    function numbersBetween(int $a, int $b)
    {
        if ($a <= $b)
        {
            if ($a >= $b) 
            {
                echo $a."\n";
                return;
            }
            else 
            {
                echo $a.", ";
                return numbersBetween($a + 1, $b);
            }
        }
        else
        {
            echo $a.", ";
            return numbersBetween($a - 1, $b);
        }        
    }
    echo("9, 4 :")."\n";        numbersBetween(9, 4);
    echo("4, 9 :")."\n";        numbersBetween(4, 9);
    echo("-4, -9 :")."\n";      numbersBetween(-4, -9);
    echo("4, 4 :")."\n";        numbersBetween(4, 4);
?>