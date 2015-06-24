<?php
/**
 * Created by PhpStorm.
 * User: apotente
 * Date: 24/06/15
 * Time: 13:01
 */

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', [
    'as' =>'auth/login',
    'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('auth/logout', [
    'as' => 'auth/logout',
    'uses' => 'Auth\AuthController@getLogout'
]);
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', [
    'as' => 'auth/register',
    'uses' => 'Auth\AuthController@postRegister'
]);
