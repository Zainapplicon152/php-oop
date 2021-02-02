<?php
//restriction on access to class properties and functions
//public properties and methods can be accessed outside class and in derived class
//protected properties and methods can not be accessed outside class and but only in derived class
//private properties and methods can not be accessed outside class and also in derived class
class base
{
    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo $this->name . '<br>';
    }
}

$test = new base("zain");
//$test->name = 'zaini'; override the above name
$test->show();
