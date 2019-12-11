<?php

include 'person.php';

class Book
{
    public $price;
    public $authors;

    public function price(int $price)
    {
        $this->price = $price;
    }

    public function authors(Person $person)
    {
        $this->authors = $person->names();
    }
}

$book = new Book();
$person = new Person();
$book->authors($person);

print_r($book->authors);