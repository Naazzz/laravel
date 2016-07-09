<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Books Routes
Route::get('/books', 'BooksController@index');


Route::get('/books/create', 'BooksController@create');
Route::post('/books/create', 'BooksController@store');

Route::get('/books/{book}/edit', 'BooksController@edit');
Route::patch('/books/{book}', 'BooksController@update');

Route::get('/books/{book}/delete', 'BooksController@destroy');


Route::get('/books/{book}', 'BooksController@show');



//Comments Routes
Route::post('/books/{book}/comment/create', 'CommentsController@store');

Route::get('/books/{comment}/comment/edit','CommentsController@edit');
Route::patch('/books/{comment}/comment','CommentsController@update');

Route::get('/books/{comment}/comment/delete','CommentsController@destroy');






