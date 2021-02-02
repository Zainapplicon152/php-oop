<?php

//different classes using same properties -- properties overriding
//different classes using same method -- method overriding
class base
{
    public $name = "Parent";

    public function cal($a, $b)
    {
        return $a * $b;
    }
}

class derived extends base
{
    public $name = "Child";

    public function cal($a, $b)
    {
        return $a + $b;
    }
}

$t1 = new base();
echo $t1->name . '<br>';
echo $t1->cal(2, 2) . '<br>';

$t2 = new derived();
echo $t2->name . '<br>';
echo $t2->cal(3, 2) . '<br>';
