<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

require (__DIR__ . '/Routes/auth.php');


Route::group(['prefix'=>'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('index','IndexController');
    Route::resource('users','UsersController');
    Route::resource('items','ItemsController');
});
