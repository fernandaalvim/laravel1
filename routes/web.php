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


Route::get('/books', 'BookController@index');
//add to database
Route::get('/books/add', 'BookController@create');
Route::post('/books/add', 'BookController@store');
//delete from database
Route::get('/books/delete/{id}', 'BookController@edit');
Route::put('/books/delete/{id}', 'BookController@destroy');
//show details
Route::get('/books/detail/{id}', 'BookController@show');
//edit or update
Route::get('/books/edit/{id}', 'BookController@edit2');
Route::put('/books/edit/{id}', 'BookController@update');
