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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//carers routes

Route::get('/carers/all', 'CarerController@index')->name('carers.all');

//patients routes

Route::get('/patients/all', 'patientController@index')->name('patients.all');
Route::get('/patients/new', 'patientController@create')->name('patients.new');
Route::post('/patients/new', 'patientController@store')->name('patients.new');

