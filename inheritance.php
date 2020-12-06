<?php
class Fruits{
    public $name;
    public function set_name($name){
        $this->name = $name;
    }
    
}
class Apple extends Fruits{
    public function juice(){
        echo 'Juice';
    }
}
class Mangoo extends Fruits{
}
$apple = new Apple;
$apple->set_name('My Apple');
echo $apple->name;
$apple->juice();
echo '<br/>';
$mangoo = new Mangoo;
$mangoo->set_name('My Mangoo');
echo $mangoo->name;