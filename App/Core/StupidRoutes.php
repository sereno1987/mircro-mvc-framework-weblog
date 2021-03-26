<?php
namespace App\Core;

use App\Utilities\Url;

class StupidRoutes{
    private $routes;
    public function __construct()
    {
        $this->routes=[
            '/bg/blue'=>'/colors/blue.php',
            '/bg/red'=>'/colors/red.php',
            '/bg/green'=>'/colors/green.php'
        ];

    }

    public  function run()
    {
        $currentRoute= Url::current_route();
        foreach ($this->routes as $route=>$view){
            if ($currentRoute==$route)
                include BASEPATH.'views/'.$view;

        }

    }
}