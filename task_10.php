<?php
    try
    {
        //task10
        class Calculator
        {
            private $leftVal;
            private $rightVal;
            private $result;

            public function __construct(float $_leftVal, float $_rightVal)
            {
                $this->leftVal = $_leftVal;
                $this->rightVal = $_rightVal;
                $this->result = 0;
            }

            public function add()   
            { 
                $this->result = $this->leftVal + $this->rightVal; 
                return $this;
            }
            public function subtract()   
            {
                $this->result = $this->leftVal - $this->rightVal; 
                return $this;
            }
            public function multiply()           
            { 
                $this->result = $this->leftVal * $this->rightVal;            
                return $this;
            }
            public function divide()   
            {
                if ($this->rightVal != 0) 
                {
                    $this->result = $this->leftVal / $this->rightVal;            
                    return $this;
                }            
                throw new Exception("division by zero!!!");
                return $this;
            }
            public function output()    { return $this->result; }
            public function addBy(float $a)   
            {
                $this->result += $a; 
                return $this;
            }
            public function subtractBy(float $a)
            {
                $this->result -= $a; 
                return ($this->leftVal - $this->rightVal);
            }
            public function multiplyBy(float $a)   
            {
                $this->result *= $a; 
                return $this;
            }
            public function divideBy(float $a)   
            { 
                if ($a != 0)
                {
                    $this->result /= $a;                
                    return $this;
                }
                throw new Exception("division by zero!!!");
            }
        }
        $mycalc = new Calculator(12, 6);
        echo $mycalc->add()->output(), "\n";
        echo $mycalc->multiply()->output(), "\n";

        echo $mycalc->add()->divideBy(9)->output(), "\n";  
        echo $mycalc->subtract()->divideBy(0)->output(), "\n";
    }
    catch (Exception $e) 
    {
        echo 'Exception: ',  $e->getMessage(), "\n";
    }
?>