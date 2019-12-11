<?php

//working on OOP_PHP method chaining
class Billing
{
    public $deserts = 2;
    public $dinner = 20;
    public $cold_drink = 5;
    public $bill;

    public function __construct()
    {
        $this->bill = 3;
    }

    public function dinner($person)
    {
        $this->bill += $this->dinner * $person;
        return $this;
    }

    public function deserts($person)
    {
        $this->bill += $this->deserts * $person;
        return $this;
    }

    public function cold_drink($person)
    {
        $this->bill += $this->cold_drink * $person;
        return $this;
    }

    public function __destruct()
    {
        echo $this->bill;
    }
}

$bill = new Billing();
$bill->dinner(3)->deserts(1)->cold_drink(10)->bill;