<?php
    try
    {
        //task11
        function printLabirinth(array $arr)
        {
            for ($i = 0; $i < count($arr); $i++)
            {
                for ($j = 0; $j < count($arr); $j++)
                    echo $arr[$i][$j]." ";
                echo "\n";
            }
            echo "\n";
        }

        function getLabirinth(array $arr)
        {
            $str = "";
            for ($i = 0; $i < count($arr); $i++)
            {
                for ($j = 0; $j < count($arr); $j++)
                    $str .= $arr[$i][$j]." ";
                $str .= "\n";
            }
            $str .= "\n";
            return $str;
        }

        function generateLabyrinth(int $n)
        {
            if ($n > 0)
            {
                for ($i = 0; $i < $n; $i++)
                    for($j = 0; $j < $n; $j++)
                        $lbrnth[$i][$j] = (random_int(0, 100) % 3 == 0) ? 1 : 0;
                return $lbrnth;
            }
            else
                throw new Exception("wrong parameter (< 0)!!!");
        }

        function findThePass(array &$labirinth, array &$myPath, int $xFinish, int $yFinish, int $xPos, int $yPos)
        {
            if ($xPos == $xFinish && $yPos == $yFinish)
            {
                $myPath[$xPos][$yPos] = '*';
                return true;
            }
            if (((string)$labirinth[$xPos][$yPos] != '0') || ((string)$myPath[$xPos][$yPos] != '0'))
                return false;
            
            $labirinth[$xPos][$yPos] = '*';
            if ($yPos < count($labirinth) - 1) // right
                if(findThePass($labirinth, $myPath, $xFinish, $yFinish, $xPos, $yPos + 1) == true)
                {
                    $myPath[$xPos][$yPos] = '*';
                    return true;
                }
            if ($yPos > 0) // left
                if(findThePass($labirinth, $myPath, $xFinish, $yFinish, $xPos, $yPos - 1) == true)
                {
                    $myPath[$xPos][$yPos] = '*';
                    return true;
                }
            if ($xPos > 0) // top
                if(findThePass($labirinth, $myPath, $xFinish, $yFinish, $xPos - 1, $yPos) == true)            
                {
                    $myPath[$xPos][$yPos] = '*';
                    return true;
                }
            if ($xPos < count($labirinth) - 1) // bottom
                if(findThePass($labirinth, $myPath, $xFinish, $yFinish, $xPos + 1, $yPos) == true)  
                {
                    $myPath[$xPos][$yPos] = '*';
                    return true;
                }
            return false;
        }
        
        echo "Previous results: "."\n";
        $oldTests = file_get_contents('results.txt');
        $oldTests = unserialize(base64_decode($oldTests));
        echo $oldTests."\n";
        echo "\n";
        
        $n = 7;
        $lab1 = generateLabyrinth($n);

        $xStart = 2;
        $yStart = 3;
        $xFinish = 6;
        $yFinish = 1; 
        $lab1[$xStart][$yStart] = 0;
        $lab1[$xFinish][$yFinish] = 0;

        for ($i = 0; $i < $n; $i++)
            for ($j = 0; $j < $n; $j++)
                $myPath[$i][$j] = 0;   

        echo "New results: "."\n";
        $text = getlabirinth($lab1)."Start point: ".$xStart." ".$yStart."\n"."Finish point: ".$xFinish." ".$yFinish."\n";

        if (findThePass($lab1, $myPath, $xFinish, $yFinish, $xStart, $yStart) == true)
        {
            $text .= getlabirinth($myPath);
            echo $text;  
        }
        else
        {
            $text .= "There is no way!";
            echo $text."\n";
        }
        $text = base64_encode(serialize($text));
        file_put_contents('results.txt', $text);
    }
    catch (Exception $e) 
    {
        echo 'Exception: ',  $e->getMessage(), "\n";
    }
?>