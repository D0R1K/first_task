<?php
    try
    {
        //task8
        class Matrix
        {
            private $n;
            private $m;
            private $arr;

            public function __construct(int $_n, int $_m)
            {
                if ($_n >= 1 && $_m >= 1)
                {
                    $this->n = $_n;
                    $this->m = $_m;
                    for ($i = 0; $i < $this->n; $i++)
                        for ($j = 0; $j < $this->m; $j++)
                            $this->arr[$i][$j] = 0;
                }
                else
                    throw new Exception("wrong matrix size (< 0) !!!");                                   
            }

            public function setValues(array $_arr)
            {
                for ($i = 0; $i < $this->n; $i++)
                    for ($j = 0; $j < $this->m; $j++)
                        $this->arr[$i][$j] = $_arr[$i][$j];
            }

            public function getArr() { return $this->arr; }

            public function add(Matrix $matr)
            {
                if($matr->n == $this->n && $matr->m == $this->m)
                {
                    for ($i = 0; $i < $this->n; $i++)
                        for ($j = 0; $j < $this->m; $j++)
                            $this->arr[$i][$j] += $matr->arr[$i][$j];
                    return $this;
                }
                else
                    throw new Exception("wrong matrix sizes !!!");
            }

            public function multByDigit(int $alfa)  
            {
                for ($i = 0; $i < $this->n; $i++)
                    for ($j = 0; $j < $this->m; $j++)
                        $this->arr[$i][$j] *= $alfa;
                return $this;
            }

            public function multByMatrix(Matrix $matr)
            {
                if($this->m == $matr->n)
                {
                    $res = new Matrix($this->n, $matr->m);
                    for ($i = 0; $i < $this->n; $i++)
                        for ($j = 0; $j < $matr->m; $j++)
                            for($k = 0; $k < $this->m; $k++)
                                $res->arr[$i][$j] += $this->arr[$i][$k] * $matr->arr[$k][$j]; 
                    return $res;
                }
                else
                    throw new Exception("wrong matrix sizes !!!")."\n";        
            }

            public function output()
            {
                for ($i = 0; $i < $this->n; $i++)
                {
                    for ($j = 0; $j < $this->m; $j++)
                        echo($this->arr[$i][$j])."\t";
                    echo " \n";
                }
            }
        }
        echo "matrix A:"."\n";
        $A = new Matrix(1, 2);
        $A->setValues([[1, 2]]);
        $A->output();
        echo "---------"."\n";

        echo "matrix A1:"."\n";
        $A1 = new Matrix(2, 3);
        $A1->setValues([[-2, -1, 0],
                        [1,   2, 3]]);
        $A1->output();
        echo "matrix A1 * 2:"."\n";
        $A1->multByDigit(2);
        $A1->output();
        echo "---------"."\n";

        echo "matrix A * A1:"."\n";
        $m = $A->multByMatrix($A1);
        $m->output();
        echo "---------"."\n";

        echo "matrix A1 + B:"."\n";
        $B = new Matrix(2, 3);
        $B->setValues([[1, 0, 0],
                        [0, 1, 3]]);
        $A1->add($B);
        $A1->output();    
        echo "---------"."\n"; 

        echo "matrix A + А1:"."\n";
        $A->add($A1);
    }
    catch (Exception $e) 
    {
        echo 'Exception: ',  $e->getMessage(), "\n";
    }
?>