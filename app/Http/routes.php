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
Route::get('client/create_ticket', 'ClientController@createticketshow');

Route::get('employee', 'EmployeeController@show');
Route::get('employee/attendance', 'EmployeeController@attshow');

Route::get('employee/employee_dashboard', 'EmployeeController@dashboardshow');

Route::get('employee/employee_notification', 'EmployeeController@notificationshow');
Route::get('roleadmin', 'RoleadminController@show');

Route::get('roleadmin/create_project', 'RoleadminController@createprojectshow');
Route::get('roleadmin/projects_view', 'RoleadminController@viewprojectshow');
Route::get('roleadmin/projects_dashboard', 'RoleadminController@projectdashboardshow');

Route::get('employee/employee_absence', 'EmployeeController@absenceshow');
Route::get('employee/employee_allowence', 'EmployeeController@allowenceshow');

Route::get('roleadmin', 'RoleadminController@show');


Route::get('login', 'LoginController@show');

