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

Route::get('cheat', 'CheatController@index');
Route::get('cheat/create', 'CheatController@create');
Route::post('cheat', 'CheatController@store');
Route::get('cheat/{id}', 'CheatController@show');
Route::get('cheat/{id}/edit', 'CheatController@edit');
Route::post('cheat/{id}', 'CheatController@update');
Route::post('cheat/{id}', 'CheatController@destroy');

Route::get('dateconv', function () {
    return view('utils/dateconv', ['title' => 'LifeCockpit']);
});
Route::get('/', function () {
    return view('home', ['title' => 'LifeCockpit']);
});
