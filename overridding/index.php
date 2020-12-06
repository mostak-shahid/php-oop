<?php
class Book
{
    public $name = 'Mostak Shahid';
    public function author(){
        return 'The author name is: ' . $this->name;
    }
    public function get_author(){
        return $this->author();
    }
}
class NewBook extends Book
{
    public function author(){
        // return 'The author names are: ' . $this->name . ' and Opu';
        return parent::author() . ' <br/> and Opu';
    }
    
}
$book = new NewBook;
// echo $book->author();
echo $book->get_author();