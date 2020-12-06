<?php
include "Person.php";
class Book
{
    public $price;
    public $authors;
    public $buyers;
    public function price(int $price){
        $this->price = $price;
    }
    public function authors(array $names){
        $this->authors = $names;
    }
    public function buyers(Person $person){
        $this->buyers = $person->names();
    }
}

$book = new Book;
// $book->price('ABC'); // Error
$book->price('20');
echo $book->price;
echo '<br/>';
$book->authors(['Author Name']);
print_r($book->authors);
echo '<br/>';
$buyers = new Person;
$book->buyers($buyers);
print_r($book->buyers);