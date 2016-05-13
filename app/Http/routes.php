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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('home', 'HomeController@show');

Route::get('client', 'ClientController@show');
Route::get('client/ticket', 'ClientController@ticketshow');

Route::get('employee', 'EmployeeController@show');
Route::get('employee/attendance', 'EmployeeController@attshow');
Route::get('roleadmin', 'RoleadminController@show');