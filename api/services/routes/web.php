<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::post('/authz/signup', 'AuthZController@signup');
Route::get('/authz/getsession','AuthZController@checkSession');
Route::post('/authz/login','AuthZController@loggingin');
Route::get('/authz/logout','AuthZController@logout');

//Route::get('/level','LevelController@getLevels');
Route::get('/newGame','newGameController@getLevelOne');
Route::post('/submitLevel', 'SubmitLevelController@index');

