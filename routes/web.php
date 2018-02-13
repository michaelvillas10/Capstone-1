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

Route::get('/client/show','RegisterController@showreqtable');


Route::get('/client/register','RegisterController@showclientregister');
Route::post('/client/register', 'RegisterController@clientregister');
Route::get('/casetbh/register','RegisterController@showcasetbhregister');
Route::post('/casetbh/register','RegisterController@casetbhregister');
Route::get('/adverse/register','RegisterController@showadverseregister');
Route::post('/adverse/register','RegisterController@adverseregister');

Route::get('/schedule/show','RegisterController@schedule');
Route::get('/schedule/register','RegisterController@showschedule');
Route::post('/schedule/register','RegisterController@scheduleregister');
Route::put('/schedule/edit/{id}','UpdateController@schededit')->name('schededit');
Route::delete('/schedule/delete/{id}','DeleteController@scheddelete')->name('deletesched');

Route::get('/courttype/register','RegisterController@showcourttyperegister');
Route::post('/courttype/register', 'RegisterController@courttyperegister');
Route::put('/courttype/edit/{id}','UpdateController@ctedit')->name('editct');
Route::delete('/courttype/delete/{id}','DeleteController@ctdelete')->name('delct');

Route::get('/court/register','RegisterController@showcourtregister');
Route::post('/court/register', 'RegisterController@courtregister');
Route::put('/court/edit/{id}','UpdateController@couedit')->name('editcou');
Route::delete('/court/delete/{id}','DeleteController@coudelete')->name('delcou');



//Route::resource('clients', 'ClientController');
Route::resource('interviewees', 'IntervieweeController');
Route::resource('lawsuits', 'LawsuitController');
Route::resource('religions', 'ReligionController');
Route::resource('citizenships', 'CitizenshipController');
Route::resource('employees', 'EmployeeController');


Route::get('/', function () {
    return view('home');
});






