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
Route::get('/carers/new','CarerController@create')->name('carers.new');
Route::post('/carers/new','CarerController@store')->name('carers.new');

//patients routes

Route::get('/patients/all','PatientController@index')->name('patients.all');
Route::get('/patients/new','PatientController@create')->name('patients.new');
Route::post('/patients/new','PatientController@store')->name('patients.new');
Route::get('/patients/edit/{id}','PatientController@edit')->name('patient.edit');
Route::post('/patients/edit/{id}','PatientController@update')->name('patient.edit');
Route::get('/patients/delete/{id}','PatientController@destroy')->name('patient.delete');
