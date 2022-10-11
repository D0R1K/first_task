<?php
    try
    {
        //task9
        class Student
        {
            protected $firstName;
            protected $lastName;
            protected $group;
            protected $averageMark;

            public function __construct(string $_firstName, string $_lastName, string $_group, float $_averageMark)
            {
                $this->firstName = $_firstName;
                $this->lastName = $_lastName;
                $this->group = $_group;
                $this->averageMark = $_averageMark;       
            }

            public function getScholarship() { return ($this->averageMark == 5) ? 100 : 80; }
        }

        class Aspirant extends Student
        {
            private $research_work;

            public function __construct(string $_firstName, string $_lastName, string $_group, float $_averageMark, string $_research_work = "-")
            {
                parent::__construct($_firstName, $_lastName, $_group, $_averageMark);
                $this->research_work = $_research_work;
            }

            public function getScholarship() { return ($this->averageMark == 5) ? 200 : 180; }
        }

        $st1 = new Student("Egor", "Dorosev", "9", 4.0);
        $st2 = new Student("Ivan", "Ivanov", "6", 5);
        $st3 = new Student("Denis", "Petrov", "7", 4.0);
        $st4 = new Student("Anton", "Antonov", "8", 3.5);

        $asp1 = new Aspirant("Nick", "Gorbunov", "9", 4.6, "ciphers research");
        $asp2 = $asp1;
        
        $asp2 = &$st1;
        echo $asp2->getScholarship(), "\n";
        
        $arr123 = array($st1, $st2, $st3, $st4, $asp1);
        foreach ($arr123 as $i)
        {
            echo "Scholarship: ".$i->getScholarship()."\n";
        }
    }
    catch (Exception $e) 
    {
        echo 'Exception: ',  $e->getMessage(), "\n";
    }
?>