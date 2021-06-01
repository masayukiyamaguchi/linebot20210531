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

/************************ LINE ************************/
Route::group(['namespace' => 'Api'], function() {
    // LineからのWebhookを受信用
    Route::post('/line/webhook', 'LineWebhookController@webhook')->name('line.webhook');
});