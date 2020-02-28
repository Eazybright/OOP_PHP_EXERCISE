<?php

class Book
{
    public static $name = "Ezekiel";

    public static function name()
    {
        return "The author name is " . self::$name . "\n";
    }

    public static function getName()
    {
        echo static::name();
    }
}

class newBook extends Book
{
    public static function name()
    {
        return "The author names are Bolanle and " . self::$name . "\n";
    }
}

Book::getName();
newBook::getName();