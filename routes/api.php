<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::group(['domain' => 'lc.astrominit.com'], function() {
    Route::post('/newmemo', function () {
        if (file_exists('/home/tea/diary/memo.txt')) {
            rename("/home/tea/diary/memo.txt", "/home/tea/diary/memo" . date('Ymd') . ".txt");
            touch('/home/tea/diary/memo.txt');
        }
        return '{"result":"OK"}';
    });
    Route::post('/upmemo', function () {
        if (file_exists('/home/tea/diary/memo.txt')) {
            $fp = fopen('/home/tea/diary/memo.txt');
            fputs($_POST['txt']);
            fclose($fp);
        }
        return '{"result":"OK"}';
    });
    Route::post('/lt/add', 'Api\LtController@add');

    Route::get('/diary/files', 'Api\DiaryController@files')->middleware('App\Http\Middleware\SimpleApi');
    Route::get('/diary/get/{file}', 'Api\DiaryController@get')->middleware('App\Http\Middleware\SimpleApi');
});
