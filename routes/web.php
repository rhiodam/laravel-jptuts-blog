<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/braintree/secret' , function (){

//    2 ways to acces .env value
//    echo config('services.braintree.secret');
    echo Config::get('services.braintree.secret');

});


// ? for optional request parameter
Route::get('/user/{id}/{name?}/' , function ($id , $name){
    echo $id .' ::  '. $name;
});

//Prefix
Route::prefix('admin')->group(function (){

    Route::get('/', function () {
        echo 'Admin Panel';
   });

    Route::get('/profile', function () {
        echo 'Admin profile';
   });

    Route::get('/user', function () {
        echo 'Admin user';
   });

    Route::get('/settings', function () {
        echo 'Admin settings';
   });

});