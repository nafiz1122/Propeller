<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ClientController@index');
//view single service
Route::get('/viewService/{id}', 'ClientController@ViewService');
//Registration Patient
Route::get('/PatientReg','ClientController@PatientReg');
Route::post('/PatientStore','ClientController@PatientStore');
//get districts and upazila
Route::get('/upazilas','ClientController@getUpazilas');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/dashboard','AdminController@index')->name('dashboard');

    //slider crud
     Route::get('/addSlider','SliderController@index');
     Route::post('/storeSlider','SliderController@store');

    //about crud
     Route::get('/addAbout','AboutController@index');
     Route::post('/storeAbout','AboutController@store');

    //service crud
     Route::get('/addService','ServiceController@index');
     Route::post('/storeService','ServiceController@store');
    //Team crud
     Route::get('/addTeam','TeamController@index');
     Route::post('/storeTeam','TeamController@store');
    //Advisor crud
     Route::get('/addAdvisor','AdvisorController@index');
     Route::post('/storeAdvisor','AdvisorController@store');
    //Blog crud
     Route::get('/addBlog','BlogController@index');
     Route::post('/storeBlog','BlogController@store');

     //Patirnt crud
     Route::get('/allPatient','PatientFormController@index');
     Route::get('/singlePatient/{id}','PatientFormController@show');

  });