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
        return view('ogatism', ['title' => 'ogatism.com', 'pagetitle' => 'ogatism.com']);
    });
});
Route::group(['domain' => 'microcosm.ogatism.com'], function() {
    Route::get('/', function () {
        return view('microcosm', ['title' => '西洋占星術師用ホロスコープ作成ソフト「microcosm」', 'pagetitle' => 'microcosm']);
    });
    Route::get('help', 'HelpController@index');
    Route::get('help/install', 'HelpController@install');
    Route::get('help/{category_id}', 'HelpController@index');
});
Route::group(['domain' => 'microcosm.astrominit.com'], function() {
    Route::get('/', function () {
        return view('microcosm', ['title' => '西洋占星術師用ホロスコープ作成ソフト「microcosm」', 'pagetitle' => 'microcosm']);
    });
    Route::get('help', 'HelpController@index');
    Route::get('help/install', 'HelpController@install');
    Route::get('help/{category_id}', 'HelpController@index');
});

Route::group(['domain' => 'tc.ogatism.com'], function(){
    Route::get('cheat', 'CheatController@index');
    Route::get('cheat/create', 'CheatController@create');
    Route::post('cheat', 'CheatController@store');
    Route::get('cheat/{id}', 'CheatController@show');
    Route::get('cheat/{id}/edit', 'CheatController@edit');
    Route::post('cheat/{id}', 'CheatController@update');
    Route::post('cheat/{id}', 'CheatController@destroy');
    Route::get('business', 'BusinessController@index');
    Route::get('dateutil', 'LockedController@dateutil');
    Route::get('category/{category}', 'CategoryController@show');
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'tc.astrominit.com'], function(){
    Route::get('cheat', 'CheatController@index');
    Route::get('cheat/create', 'CheatController@create');
    Route::post('cheat', 'CheatController@store');
    Route::get('cheat/{id}', 'CheatController@show');
    Route::get('cheat/{id}/edit', 'CheatController@edit');
    Route::post('cheat/{id}', 'CheatController@update');
    Route::post('cheat/{id}', 'CheatController@destroy');
    Route::get('business', 'BusinessController@index');
    Route::get('dateutil', 'LockedController@dateutil');
    Route::get('category/{category}', 'CategoryController@show');
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'lc.ogatism.com'], function(){
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'lc.astrominit.com'], function(){
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'programming-miss60.ogatism.com'], function() {
    Route::get('/', function () {
        return view('book-landing', ['title' => '10年間のエンジニア人生でやらかした60のミス', 'pagetitle' => '10年間のエンジニア人生でやらかした60のミス']);
    });
});
Route::group(['domain' => 'programming-miss60.astrominit.com'], function() {
    Route::get('/', function () {
        return view('book-landing', ['title' => '10年間のエンジニア人生でやらかした60のミス', 'pagetitle' => '10年間のエンジニア人生でやらかした60のミス']);
    });
});
