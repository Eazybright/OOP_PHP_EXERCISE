<?php

interface fixable
{
	public function problem(): String;
}

class Vehicle implements fixable
{
	public $problemType;

	public function __construct(String $problemType)
	{
		$this->problemType = $problemType;
	}

	public function problem(): String
	{
		return $this->problemType;
	}
}

// $Vehicle = new Vehicle("Hello, this is a mercedes motor");
// echo $Vehicle->problem();

class Car extends Vehicle{}

class Mercedes extends Car{}
/**
 *  
 */
class Mechanic
{
	
	function fix(fixable $car)
	{
		return 'Mechanic is fixing '. get_class($car).' '. $car->problem();
	}
}

$mechanic = new Mechanic;
$car = new Vehicle("Gear Box problem");
echo $mechanic->fix($car);
