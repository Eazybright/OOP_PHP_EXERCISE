<?php

include 'mobile.php';
include 'laser.php';

class Galaxy extends mobile
{
    use Laser;
    public function abc()
    { }
}

$obj = new Galaxy();
// $obj->power();

$obj->battery();
// $obj->range();