<?php
#front controller
use App\Core\StupidRoutes;

include __DIR__."/bootstrap/init.php";

$router=new StupidRoutes();
$router->run();
