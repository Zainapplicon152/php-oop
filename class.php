<?php
//class is a blueprint or map
//object derived from this blueprint
//class have properties
//class have methods
//store value in class use properties
//calculate properties use methods
class calculation
{
    public $a, $b, $c; //public can be accessed outside class

    function sum()
    {
        $this->c = $this->a + $this->b; //$this used for accessed properties inside function
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$obj1 = new calculation(); //object creation
$obj1->a = 2;
$obj1->b = 3;
echo $obj1->sub() . ' obj1 sub <br>';
echo $obj1->sum() . ' obj1 sum <br>';

$obj2 = new calculation();
$obj2->a = 10;
$obj2->b = 5;
echo $obj2->sum() . ' obj2 sum <br>';
echo $obj2->sub() . ' obj2 sub<br>';