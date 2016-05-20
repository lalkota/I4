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


//Route::get('client', 'ClientController@show');

Route::get('client/ticket', 'ClientController@ticketshow');
Route::get('client/create_ticket', 'ClientController@createticketshow');
Route::resource('client', 'ClientController');

Route::get('employee/attendance', 'EmployeeController@attshow');

// r
Route::get('employee/employee_dashboard', 'EmployeeController@dashboardshow');
Route::get('employee/employee_notification', 'EmployeeController@notificationshow');
Route::get('employee/employee_absence', 'EmployeeController@absenceshow');
Route::get('employee/employee_allowence', 'EmployeeController@allowenceshow');
// r

Route::get('employee/employee_registration', 'EmployeeController@registrationshow');
Route::resource('employee', 'EmployeeController');

Route::resource('admin', 'SuperadminController');




Route::get('roleadmin', 'RoleadminController@show');


Route::get('project/create_project', 'ProjectController@createprojectshow');
Route::get('project/projects_list', 'ProjectController@viewprojectshow');
Route::get('project/projects_dashboard', 'ProjectController@projectdashboardshow');
Route::get('project/projects_notification', 'ProjectController@projectnotificationdashboardshow');
Route::get('project/projects_notification_detail', 'ProjectController@projectnotificationdetaildashboardshow');
Route::resource('project', 'ProjectController');

Route::get('login', 'LoginController@show');

