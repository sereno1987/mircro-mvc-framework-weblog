<?php
namespace App\Utilities;
class Asset{
   public static function get_base_url(string $route){
       return $_ENV['BASE_URL']."assets".$route;
   }

    public static function get_css_url(string $route){
        return $_ENV['BASE_URL']."assets/css".$route;
    }

    public static function get_image_url(string $route){
        return $_ENV['BASE_URL']."assets/img".$route;
    }

    public static function get_js_url(string $route){
        return $_ENV['BASE_URL']."assets/js".$route;
    }

    public static function get_fonts_url(string $route){
        return $_ENV['BASE_URL']."assets/fonts".$route;
    }

//    public static function __callStatic($name, $arguments)
//    {
//
//
//        if($name != "get"){
//            return $_ENV['HOST'] . "assets/{$name}/" . $arguments[0];
//        }
//
//        return $_ENV['HOST'] . "assets/" . $arguments[0];
//
//    }

}