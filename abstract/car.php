<?php

abstract class Car
{
    public function getName()
    {
        return 'my car';
    }

    abstract function calculateTankArea();
}