<?php
class User
{
    public $name = 'Mostak Shahid';
    public $address;
    static public $age;
    
    static public function get_name($name){
        return $name;
    }
    public function get_age(){
        return self::$age = 18;
    }
    public function get_address($address){
        return $this->get_address = $address;
    }
}
$user = new User;
echo $user->get_name('Mostak Shahid');
echo $user->get_age();
echo $user->get_address('Pagla, Narayanganj');
echo '<br/>';
echo User::get_name('Mostak Shahid');

