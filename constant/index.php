<?php
class Circle
{
    const PI = 3.14159;
    public function area($radius){
        return $radius * $radius * self::PI;
    }
}

$circle = new Circle;
echo 'PI: ' . $circle::PI;
echo '<br/>';
echo 'Area: ' . $circle->area(5);