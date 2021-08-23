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

Route::get('/all-contacts','AboutController@AllContact')->name('all.contacts');
Route::get('/insert-data','AboutController@InsertData');
Route::post('/data-added','AboutController@DataAdded');

Route::get('/delete-contact/{id}','AboutController@Delete');
Route::get('/edit-contact/{id}','AboutController@Edit');
Route::post('/update-contact/{id}','AboutController@Update');
Route::get('/view-contact/{id}','AboutController@View');






