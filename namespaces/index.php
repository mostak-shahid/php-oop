<?php
// namespace Second;
include "fsn.php";
include "ssn.php";
use Second\A;
// use Second\A as NewA;
$obj = new A;
echo '<br/>';
// $obj = new Second\A; // Qualified class name
// $obj = new A; // Unqualified class name
$obj = new \A; // Fully qualified class name
// echo $obj;