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
//
Route::get('/language/register','RegisterController@showlanguageregister');
Route::post('/language/register', 'RegisterController@lsregister');
//
Route::get('/education/register','RegisterController@showeducationregister');
Route::post('/education/register', 'RegisterController@elregister');

Route::get('/casecategory/register','RegisterController@showcasecategoryregister');
Route::post('/casecategory/register', 'RegisterController@ccregister');

Route::get('/caseinvolvement/register','RegisterController@showcaseinvolvementregister');
Route::post('/caseinvolvement/register', 'RegisterController@ciregister');


Route::resource('clients', 'ClientController');
Route::resource('interviewees', 'IntervieweeController');
Route::resource('lawsuits', 'LawsuitController');
Route::resource('religions', 'ReligionController');
Route::resource('citizenships', 'CitizenshipController');
Route::resource('employees', 'EmployeeController');


Route::get('/', function () {
    return view('home');
});



Route::get('lawyer_t',function(){
	return view('maintenance/lawyer_table');
});





