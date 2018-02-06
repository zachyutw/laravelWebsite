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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');

Route::post('/contact/submit','MessagesController@submit');

Route::get('/messages','MessagesController@getMessages');
Route::get('/todo','TodosController@index');
Route::resource('todo','TodosController');
Auth::routes();

Route::resource('listings','ListingsController');
Route::get('/home', 'HomeController@index')->name('home');


