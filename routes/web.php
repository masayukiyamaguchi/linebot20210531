<?php

use Illuminate\Support\Facades\Route;

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

/************************ LINE *************************/
// line webhook受取
Route::post('/line/callback','LineApiController@postWebhook');
// line メッセージ送信
Route::get('/line/message/send','LineApiController@sendMessage');