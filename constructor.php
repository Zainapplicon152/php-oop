<?php

class person
{
    public $name, $age, $profession;

    function __construct($n = 'no name', $a = 0, $p = 'no profession')
    {
        $this->name = $n;
        $this->age = $a;
        $this->profession = $p;
    }

    function show()
    {
        echo $this->name . ' - ' . $this->age . ' - ' . $this->profession . "<br>";
    }
}

$p1 = new person();
$p1->show();
$p2 = new person('zain', 23, 'Software Engineer');
$p2->show();
