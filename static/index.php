<?php

class Eyowo
{
    static public $name = "Ezekiel";
    static public $number = 1;

    static public function getName()
    {
        return self::$name = "Eazybright";
    }

    static public function increment()
    {
        return self::$number++;
    }
}

echo Eyowo::getName();
echo "\n";
echo Eyowo::increment();
echo "\n";
echo Eyowo::increment();
echo "\n";
echo Eyowo::increment();