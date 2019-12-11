<?php

//implementing inheritance property
class Fruit
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Apple extends Fruit
{ }

class Mango extends Fruit
{ }

$apple = new Apple();
$apple->setName("My Apple");
echo $apple->name;

$mango = new Mango();
$mango->setName("My Mango");
echo $mango->name;