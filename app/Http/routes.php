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


Route::get('patients', 'PatientsController@index');
Route::get('patients/create', 'PatientsController@create');
Route::get('patients/{id}/edit', 'PatientsController@edit');
Route::get('patients/{id}', 'PatientsController@show');
Route::delete('patients/{id}', 'PatientsController@destroy');
Route::put('patients/{id}', 'PatientsController@update');
Route::post('patients', 'PatientsController@store');

Route::get('surgeons', 'SurgeonsController@index');
Route::get('surgeons/create', 'SurgeonsController@create');
Route::get('surgeons/{id}/edit', 'SurgeonsController@edit');
Route::get('surgeons/{id}', 'SurgeonsController@show');
Route::put('surgeons/{id}', 'SurgeonsController@update');
Route::delete('surgeons/{id}', 'SurgeonsController@destroy');
Route::post('surgeons', 'SurgeonsController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
