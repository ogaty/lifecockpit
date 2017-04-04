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

Route::group(['domain' => 'tc.ogatism.com'], function(){
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'tc.astrominit.com'], function(){
    Route::get('home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'lc.ogatism.com'], function(){
    Route::get('home', 'HomeController@index');
    Route::get('diary', ['as' => 'diary', 'uses' => 'HomeController@diary']);
    Route::get('diary/{begin}', ['uses' => 'HomeController@diary']);
    Route::get('diary/show/{txt}', ['as' => 'diarytxt', 'uses' => 'HomeController@show_diary']);
    Route::get('note', ['as' => 'notes', 'uses' => 'HomeController@note']);
    Route::get('/', 'HomeController@index');
    Auth::routes();
});

Route::group(['domain' => 'lc.astrominit.com'], function(){
    Route::get('home', 'HomeController@index');
    Route::get('diary', ['as' => 'devdiary', 'uses' => 'HomeController@diary']);
    Route::get('diary/{begin}', ['uses' => 'HomeController@diary']);
    Route::get('diary/show/{txt}', ['as' => 'devdiarytxt', 'uses' => 'HomeController@show_diary']);
    Route::get('note', ['as' => 'notes', 'uses' => 'HomeController@note']);
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
