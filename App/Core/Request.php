<?php
namespace App\Core;


class Request{
    private $params;
    private $agent;
    private $ip;
    private $method;
    private $queryString;

    public function __construct()
    {
        $this->params=$_REQUEST;
        $this->agent=$_SERVER['HTTP_USER_AGENT'];
        $this->ip=$_SERVER['REMOTE_ADDR'];
        $this->method=$_SERVER['REQUEST_METHOD'];
        $this->queryString=$_SERVER['QUERY_STRING'];

    }


    public function getMethod(): mixed
    {
        return $this->method;
    }

    public function getAgent(): mixed
    {
        return $this->agent;
    }

    public function getIp(): mixed
    {
        return $this->ip;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function input($key)
    {
        return $this->params[$key] ?? null;
    }

    public function isset($key)
    {
        return isset($this->params[$key]);
    }

//    public function redirect($route)
//    {
//        header("location:");
//        die();
//    }

    public function getQueryString(): mixed
    {
        return $this->queryString;
    }

    public function __get(string $param)
    {
        if (array_key_exists($param, $this->params)) {
            return $this->params[$param];
        }
    }

}
