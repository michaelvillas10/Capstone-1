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
Route::get('datatable', ['uses'=>'DatatableController@clientdatatable']);
Route::get('datatable/getclients', ['as'=>'datatable.getclients','uses'=>'ClientController@getClients']);
//
Route::get('/position/register','RegisterController@showpositionregister');
Route::post('/position/register', 'RegisterController@positionregister');
Route::put('/position/edit/{id}','UpdateController@posedit')->name('editpos');
Route::delete('/position/delete/{id}','DeleteController@posdelete')->name('deletepos');
//
Route::get('/language/register','RegisterController@showlanguageregister');
Route::post('/language/register', 'RegisterController@lsregister');
Route::put('/language/edit/{id}','UpdateController@languageedit')->name('editlang');
Route::delete('/language/delete/{id}','DeleteController@languagedelete')->name('deletelang');
//
Route::get('/education/register','RegisterController@showeducationregister');
Route::post('/education/register', 'RegisterController@elregister');
Route::put('/education/edit/{id}','UpdateController@educedit')->name('editeduc');
Route::delete('/education/delete/{id}','DeleteController@educdelete')->name('deleteeduc');

Route::get('/casecategory/register','RegisterController@showcasecategoryregister');
Route::post('/casecategory/register', 'RegisterController@ccregister');
Route::put('/casecategory/edit/{id}','UpdateController@ccedit')->name('editcat');
Route::delete('/casecategory/delete/{id}','DeleteController@ccdelete')->name('deletecat');

Route::get('/caseinvolvement/register','RegisterController@showcaseinvolvementregister');
Route::post('/caseinvolvement/register', 'RegisterController@ciregister');
Route::put('/caseinvolvement/edit/{id}','UpdateController@invoedit')->name('editinvo');
Route::delete('/caseinvolvement/delete/{id}','DeleteController@invodelete')->name('deleteinvo');




Route::resource('clients', 'ClientController');
Route::resource('interviewees', 'IntervieweeController');
Route::resource('lawsuits', 'LawsuitController');
Route::resource('religions', 'ReligionController');
Route::resource('citizenships', 'CitizenshipController');
Route::resource('employees', 'EmployeeController');


Route::get('/', function () {
    return view('home');
});

Route::get('Distribution', function () {
    return view('casedistribution');
});



Route::get('lawyer_t',function(){
	return view('maintenance/lawyer_table');
});





