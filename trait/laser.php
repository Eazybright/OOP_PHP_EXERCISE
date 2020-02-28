<?php

include 'projector.php';

trait Laser
{
    use Projector;

    public function power()
    {
        echo "I am a battery\n";
    }

    abstract function abc();
}