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

Route::get('/', function () {
	return "<h1>hello naz</h1>";
    // return view('welcome');
});
Route::get('/naz',function(){
	return view('naz');
});

Route::get('/first',function(){
	$arr=['naz','rahim','lel','inar'];
	// return view('first',['var' => $arr]);
	// return view('first',compact('arr'));
	// return view('first')->with('var',$arr);
	return view('first')->withVar($arr);
});

Route::get('/about','secondController@about');

Route::get('/status','statusController@home');

Route::get('/status/{id}','statusController@show');