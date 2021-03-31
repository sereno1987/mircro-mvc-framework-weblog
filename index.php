<?php
#front controller

use App\Core\Routing\Router;

include __DIR__."/bootstrap/init.php";

$router=new Router();
$router->findRoute($request);
$router->run();
