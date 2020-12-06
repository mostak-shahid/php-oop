<?php
include "Mobile.php";
include "Laser.php";
include "Projector.php";
class Galaxy extends Mobile
{
   //  use Laser,Projector;
   use Laser,Projector {       
       Laser::power insteadof Projector;
       Projector::power as Ppower;
   }
}
$obj = new Galaxy;
$obj->battery();
$obj->power();
$obj->Ppower();
$obj->range();

// $objTrait = new Laser; // Traits cannot be instantiated, it can use inside class