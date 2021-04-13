<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SampleController;

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
// もとからあるroot。
Route::get('/', function () {
    return view('welcome');
});

// 「Users!」と出力される。それだけ。
Route::get('/users', function () {
    return 'Users!';
});

// 勉強で使ったもののhome
Route::get('/index', function () {
    return view('index'); 
});
// classを使ってみた
Route::get('/useclass', function () {
    return view('useclass'); 
});
// Cookieを読み込んで見た。（うまく行っていない）
Route::get('/readcookie', 'CookieHandling@readCookies');

// requestを処理する。
Route::get('/qiita/getRequestDate', 'SampleController@request1');

// deny TRACE
// そもそもLaravelのRouteにtraceなんてメソッドは存在しない。
// 何だったらもとからtraceもたたけない。
// Route::trace('/*',function(){
//   return response()->view('denyMethod',405);
// });