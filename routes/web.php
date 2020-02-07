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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/user', 'RolesController@useroles')->name('user');
// Route::get('/user', 'RolesController@adminroles')->name('admin')

Route::get('/home', 'HomeController@index')->name('home');


//carers routes

Route::get('/carers/all', 'CarerController@index')->name('carers.all');
Route::get('/carers/new','CarerController@create')->name('carers.new');
Route::post('/carers/new','CarerController@store')->name('carers.new');
Route::get('/carers/edit/{id}','CarerController@edit')->name('carers.edit');
Route::post('/carers/edit/{id}','CarerController@update')->name('carers.edit');
Route::get('/carers/delete/{id}','CarerController@destroy')->name('carers.delete');
Route::get('/carers/show/patients/{id}','CarerController@getPatients')->name('carers.patients');

//patients routes

Route::get('/patients/all','Patientcontroller@index')->name('patients.all');
Route::get('/patients/new','Patientcontroller@create')->name('patients.new');
Route::post('/patients/new','Patientcontroller@store')->name('patients.new');
Route::get('/patients/edit/{id}','Patientcontroller@edit')->name('patient.edit');
Route::post('/patients/edit/{id}','Patientcontroller@update')->name('patient.edit');
Route::get('/patients/delete/{id}','Patientcontroller@destroy')->name('patients.delete');
Route::get('/patients/medicines/{id}','Patientcontroller@getMedicines')->name('patients.medicines');
Route::get('/patients/managements/{id}','Patientcontroller@getManagements')->name('patients.managements');


// Doctor routes
Route::get('/doctors/all','DoctorController@index')->name('doctors.all');
Route::get('/doctors/new','DoctorController@create')->name('doctors.new');
Route::post('/doctors/new','DoctorController@store')->name('doctors.new');
Route::get('/doctors/edit/{id}','DoctorController@edit')->name('doctor.edit');
Route::post('/doctors/edit/{id}','DoctorController@update')->name('doctors.edit');
Route::get('/doctors/delete/{id}','DoctorController@destroy')->name('doctor.delete');

// Surgery routes
Route::get('/surgeries/all','SurgeryController@index')->name('surgeries.all');
Route::get('/surgeries/new','SurgeryController@create')->name('surgeries.new');
Route::post('/surgeries/new','SurgeryController@store')->name('surgeries.new');
Route::get('/surgeries/edit/{id}','SurgeryController@edit')->name('surgeries.edit');
Route::post('/surgeries/edit/{id}','SurgeryController@update')->name('surgeries.edit');
Route::get('/surgeries/delete/{id}','SurgeryController@destroy')->name('surgeries.delete');

// Medicine routes
Route::get('/medicines/all','MedicineController@index')->name('medicines.all');
Route::get('/medicines/new','MedicineController@create')->name('medicines.new');
Route::post('/medicines/new','MedicineController@store')->name('medicines.new');
Route::get('/medicines/edit/{id}','MedicineController@edit')->name('medicine.edit');
Route::post('/medicines/edit/{id}','MedicineController@update')->name('medicines.edit');
Route::get('/medicines/delete/{id}','MedicineController@destroy')->name('medicine.delete');
Route::get('/medicines/show/{id}','MedicineController@show')->name('medicine.show');


// Managements routes
Route::get('/managements/all/','ManagementController@index')->name('managements.all');
Route::get('/managements/create','ManagementController@create')->name('managements.create');
Route::post('/managements/new','ManagementController@store')->name('managements.new');
Route::get('/managements/edit/{id}','ManagementController@edit')->name('managements.edit');
Route::post('/managements/edit/{id}','ManagementController@update')->name('managements.edit');
Route::get('/managements/delete/{id}','ManagementController@destroy')->name('managements.delete');
Route::get('/managements/show/{id}','ManagementController@show')->name('management.show');

// Route::get('/managements/all','ManagementController@index')->name('patient.all');
// Route::get('/managements/create','ManagementController@create')->name('patient.create');
// Route::get('/managements/show/{patient}','ManagementController@show')->name('patient.show');
