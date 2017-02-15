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
Route::group(['domain' => 'microcosm.astrominit.com'], function() {
    Route::get('/help/page/{current}', 'HelpController@page');
    Route::get('/help/sidenav/{current}', 'HelpController@sidenav');
});
Route::group(['domain' => 'microcosm.ogatism.com'], function() {
    Route::get('/help/index', function () {
        return '{}';
    });
});
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
});
