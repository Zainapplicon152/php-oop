<?php
//Abstract class has no object
//abstract method -- this fn has no body -- only declare
//use derived class to use the abstract class -- important
abstract class parentClass
{
    public $name;

    abstract protected function calc($a, $b);
}

class childClass extends parentClass
{
    public function calc($a, $b)
    {
        echo $a + $b . '<br>';
    }

    public function sub($a, $b)
    {
        echo $a - $b . '<br>';
    }
}

$t1 = new childClass();
$t1->calc(2, 2);
$t1->sub(2, 3);
