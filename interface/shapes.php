<?php

include "geometryInterface.php";
include "shapeInterface.php";

class Triangle implements ShapeInterface, GeometryInterface
{
    public function getArea()
    {
        echo 'Area of a triangle';
    }

    public function getCircumference($length, $breadth)
    {
        echo "circumference of a triangle";
    }
}

class Rectangle implements ShapeInterface
{
    public function getArea()
    {
        echo 'Area of a rectangle';
    }
}

// $tri = new Triangle();
// $tri->getCircumference(23, 56);

$rec = new Rectangle();
$rec->getArea();