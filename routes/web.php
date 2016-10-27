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

Route::group(['domain' => 'ogatism.com'], function() {
    Route::get('/', function () {
        return view('home', ['title' => 'ogatism.com']);
    });
});

Route::group(['domain' => 'microcosm.ogatism.com'], function() {
    Route::get('/', function () {
        return view('home', ['title' => 'microcosm']);
    });
});

Route::group(['domain' => 'lc.ogatism.com'], function(){
    Route::get('cheat', 'CheatController@index');
    Route::get('cheat/create', 'CheatController@create');
    Route::post('cheat', 'CheatController@store');
    Route::get('cheat/{id}', 'CheatController@show');
    Route::get('cheat/{id}/edit', 'CheatController@edit');
    Route::post('cheat/{id}', 'CheatController@update');
    Route::post('cheat/{id}', 'CheatController@destroy');
    Route::get('business', 'BusinessController@index');
    Route::get('opensocial', 'LockedController@opensocial');
    Route::get('dateutil', 'LockedController@dateutil');
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'lc.astrominit.com'], function(){
    Route::get('cheat', 'CheatController@index');
    Route::get('cheat/create', 'CheatController@create');
    Route::post('cheat', 'CheatController@store');
    Route::get('cheat/{id}', 'CheatController@show');
    Route::get('cheat/{id}/edit', 'CheatController@edit');
    Route::post('cheat/{id}', 'CheatController@update');
    Route::post('cheat/{id}', 'CheatController@destroy');
    Route::get('business', 'BusinessController@index');
    Route::get('opensocial', 'LockedController@opensocial');
    Route::get('dateutil', 'LockedController@dateutil');
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});
