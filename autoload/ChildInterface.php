<?php
include "autoload.php";

class ChildOneInterface implements ParentOneInterface
{
    public function getArea(){
        return 'Get Area.';
    }
}

class ChildTwoInterface implements ParentOneInterface,ParentTwoInterface
{
    public function getArea(){
        return 'Get Area.';
    }
    public function calculateArea($width,$height){
        return $width * $height;
    }
}

$tri = new ChildTwoInterface;
echo $tri -> calculateArea(10,50);