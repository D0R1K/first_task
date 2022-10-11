<?php
    try
    {
        //task2
        function birthday(string $data)
        {
            if (checkdate((int)substr($data, 3, 5), (int)substr($data, 0, 2), (int)substr($data, 6, 10))
                && $data[2] == '-' && $data[5] == '-')
                return (ceil((strtotime($data) - time()) / (3600 * 24)) > 0 ?
                        ceil((strtotime($data) - time()) / (3600 * 24)) : "birthday has already passed..."); 
            else
                throw new Exception('Incorrect birthday data');
        }
        echo("18-10-2002"."\n");    echo(birthday("18-10-2002")."\n");
        echo("18-10-2022"."\n");    echo(birthday("18-10-2022")."\n");        
        echo("88-11-2022"."\n");    echo(birthday("88-11-2022")."\n");
        echo("08-11-2022"."\n");    echo(birthday("08-11-2022")."\n");
        echo("08-03-2023"."\n");    echo(birthday("08-03-2023")."\n");
        //echo("08.11.2022"."\n");    echo(birthday("08.11.2022")."\n");
    }
    catch (Exception $e) 
    {
        echo 'Exception: ',  $e->getMessage(), "\n";
    }
?>