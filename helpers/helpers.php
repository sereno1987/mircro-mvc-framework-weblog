<?php
//function site_url($route){
//    return $_ENV['BASE_URL'].$route;
//}

function view($path,$data=[]) #errors.404
    {
        extract($data);
        $path=str_replace('.','/',$path);
        $fullPath= BASEPATH."views/$path.php";
        include $fullPath;
    }