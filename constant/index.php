<?php

class Circle
{
    const PI = 3.142;

    public function getArea($radius)
    {
        return $radius * $radius * self::PI;
    }
}

$circle = new Circle();
echo $circle->getArea(4);