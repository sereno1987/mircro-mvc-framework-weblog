<?php
use App\Core\Routing\Route;


//Route::get('/');
Route::get('/','HomeController@index');
Route::get('/a');
//Route::post('/a');
Route::get('/d');
Route::get('/c', ['HomeController','index']);
Route::get('/archive', ['ArchiveController','index']);
Route::post('/b', ['HomeController@index']);
Route::get('/fun', function (){
echo "welcome";
});
Route::get('/e' , function (){
echo "save form";
});

# get the list of all routes
//var_dump(Route::getRoutes());