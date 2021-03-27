<?php
#front controller
use App\Core\Request;

include __DIR__."/bootstrap/init.php";

$request=new Request();
//var_dump($request);
//echo $request->getIp();
//var_dump( $request->getParams());
//var_dump( $request->input('name'));
//var_dump($request->isset('name'));
//var_dump($request->isset('age'));

//
//$query=$request->getQueryString();
//$parts = parse_url($query);
//parse_str($parts['query'], $query);
//echo $query['name'];



var_dump($request->edu);