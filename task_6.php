<?php

    //task6
    function renameStr(string $input)
    {
        $input = ucwords($input, "_- ");
        $input = str_replace(['-', ' ', '_'], "", $input);
        return $input;
    }
    echo renameStr(
            "               The quick-brown_fox jumps over the_lazy-dog       ")."\n";
    echo renameStr(" i.")."\n";
    echo renameStr("")."\n";

?>