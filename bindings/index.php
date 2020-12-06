<?php
class Book
{
    static public $name = 'Mostak Shahid';
    static public function author(){
        return 'The author name is: ' . self::$name;
    }
    static public function get_author(){
        // return self::author();
        return static::author();
    }
}
class NewBook extends Book
{
    static public function author(){
        return 'The author names are: ' . self::$name . ' and Opu';
        // return parent::author() . ' <br/> and Opu';
    }
    
}
// $book = new NewBook;
// echo $book->author();
// echo $book->get_author();

echo Book::get_author();
echo '<br/>';
echo NewBook::get_author(); //'Should returns "The author names are: Mostak Shahid and Opu"; but it's returning "The author names are: Mostak Shahid"