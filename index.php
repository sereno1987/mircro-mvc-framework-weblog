<?php
#front controller
use App\Utilities\Asset;
use App\Utilities\Url;

include __DIR__."/bootstrap/init.php";

//echo Asset::get_base_url()."</br>";
//echo Asset::get_css_url("css/style.css")."</br>";
//echo Asset::get_js_url("js/js.js");
//echo Url::current_url();

#the simplest and most stupid way to develop routers

$route= Url::current_route();
if ($route=='/bg/blue')
    include BASEPATH.'views/colors/blue.php';
if ($route=='/bg/red')
    include BASEPATH.'views/colors/red.php';
if ($route=='/bg/green')
    include BASEPATH.'views/colors/green.php';
