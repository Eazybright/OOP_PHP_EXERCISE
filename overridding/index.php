<?php

class Book
{
    public static $name = "Ezekiel";

    public static function name()
    {
        return "The author name is " . self::$name;
    }

    public static function getName()
    {
        echo self::$name;
    }
}

class newBook extends Book
{
    public static function name()
    {
        return "The author names are Bolanle and " . self::$name . "\n";
    }
}
// $book = new newBook();
// $book->getName();

echo newBook::name();