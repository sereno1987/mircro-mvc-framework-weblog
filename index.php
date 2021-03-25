<?php
#front controller
include "vendor/autoload.php";

use App\Core\Request;

$obj1= new Request();
echo($obj1);