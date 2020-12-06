<?php
class Bill
{
    public $dinner = 20;
    public $desert = 5;
    public $coldDrink = 3;
    public $bill;
    
    public function __construct(){
        $this->bill = 3;
    }
    
    public function dinner($person){
        $this->bill +=$this->dinner * $person;
        return $this;
    }    
    public function desert($person){
        $this->bill +=$this->desert * $person;
        return $this;
    }  
    public function coldDrink($person){
        $this->bill +=$this->coldDrink * $person;
        return $this;
    }   
}
$bill = new Bill();
echo $bill->dinner(2)->bill;
echo '<br>';
$bill2 = new Bill();
echo $bill2->dinner(2)->desert(2)->bill;
echo '<br>';
$bill3 = new Bill();
echo $bill3->dinner(2)->desert(2)->coldDrink(1)->bill;