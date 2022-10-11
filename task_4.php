<?php

    //task4
    function deleteElement(array $arr, int $position)
    {
        array_splice($arr, $position, 1);
        return $arr;
    }
    $arr = array(1, 2, 3, 4, 5);
    $pos = -1;
    print_r($arr);
    print_r(deleteElement($arr, $pos));

    $arr = array(1, 2, 3, 4, 5);
    $pos = 3;
    print_r($arr);
    print_r(deleteElement($arr, $pos));
?>