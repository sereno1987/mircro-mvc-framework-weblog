<?php
namespace App\Core\Routing;
use App\Core\Request;
use Exception;

class Router{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER='App\Controllers\\';

   public function __construct()
   {
       $this->request=new Request();
       $this->routes=Route::getRoutes();
       $this->current_route= $this->findRoute($this->request) ?? null;
   }

    public function findRoute(Request $request)
    {
//        echo $request->getMethod()."-".$request->getUri();
        foreach ($this->routes as $route)
        {
            if(in_array($request->getMethod(),$route['methods']) && $request->getUri()==$route['uri']){
                return $route;
            }

        }
        return null;
    }

    private function isInvalidMethod(Request $request)
    {
        foreach ($this->routes as $route)
        {
            if(!in_array($request->getMethod(),$route['methods']) && $request->getUri()==$route['uri']){
                return true;
            }
        }

    }


    private function dispatch405()
    {
        header($_SERVER["SERVER_PROTOCOL"]." 405 Method Not Allowed", true, 405);
        view('errors.405');
        die();
    }

    private function dispatch404()
    {
        header("HTTP/1.0 404 Not Found");
        view('errors.404');
        die();
    }

    public function run()
    {
        #405: invalid request method
        if ($this->isInvalidMethod($this->request))
        {
            $this->dispatch405();
        }

        #404:  uri doesnt exist
        if (is_null($this->current_route))
        {
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);


    }

    public static function dispatch($route)
    {
        $action=$route['action'];

        #action:null
        if(is_null($action)|| empty($action))
        {
            return;
        }

        #action:closure
        if(is_callable($action))
        {
            $action();
//            call_user_func($action);
        }

        #action: Controller@method
        if(is_string($action))
        {
            $action = explode('@',$action);
        }

        #action: ['Controller','method']
        if(is_array($action))
        {
            #class
            $class_name=self::BASE_CONTROLLER.$action[0];
            if(!class_exists($class_name))
            {
                throw new Exception("Class $class_name does not exist!");
            }
            $controller=new $class_name();

            #method
            $method=$action[1];
            if(!method_exists($controller, $method))
            {
                throw new Exception("method $method does not exist in $class_name!");
            }
            $controller-> {$method}();
        }
    }

 }