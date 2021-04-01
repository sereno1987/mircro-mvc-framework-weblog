<?php

use App\Controllers\TodoController;
use App\Core\Routing\Route;


//Route::get('/');
//Route::get('/','HomeController@index');
//Route::get('/a');
////Route::post('/a');
//Route::get('/d');
//Route::get('/c', ['HomeController','index']);
////Route::get('/archive', ['ArchiveController','index']);
//Route::get('/fun', function (){
//    echo "welcome";
//});
//Route::get('/e' , function (){
//    echo "save form";
//});

Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/articles', 'ArchiveController@articles');
Route::get('/archive/products', 'ArchiveController@products');



Route::get('/todo', ['TodoController','list']);
Route::get('/todo/add', ['TodoController','add']);
Route::get('/todo/remove', ['TodoController','remove']);



# get the list of all routes
//var_dump(Route::getRoutes());