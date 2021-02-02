<?php

//properties and methods of one class used by another class
class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()
    {
        echo "<h3> Employee Profile</h3>";
        echo $this->name . '<br>';
        echo $this->age . '<br>';
        echo $this->salary . '<br>';
    }
}

class manager extends employee
{
    public $ta = 3000;
    public $ph = 2000;
    public $total_salary;

    function info()
    {
        $this->total_salary = $this->salary + $this->ta + $this->ph;
        echo "<h3> Employee Profile</h3>";
        echo $this->name . '<br>';
        echo $this->age . '<br>';
        echo $this->total_salary . '<br>';
    }
}

$e = new employee('Zain', 23, 22000);
$e->info();

$m = new manager('Zaini', 23, 23000);
$m->info();

