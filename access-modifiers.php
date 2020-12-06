<?php
class User
{
    public $name = "Mostak"; // can be accessed from every where
    private $password = "123456789"; // can be accessed from this class only 
    protected $email = "abc@email.com"; // can be accessed from this class and child class only
    
    public function get_password(){
        return $this->password;
    }
}
class Admin extends User
{
    /*public function __construct(){
        echo $this->email;
    }*/
    
    public function get_email(){
        return $this->email;
    }
}
$user = new User;
echo $user->name;
echo $user->get_password();
//echo $user->email;
//echo $user->password;

$admin = new Admin;
echo $admin->get_email();