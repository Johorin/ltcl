<?php

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

// 任意のリクエスト「/」から実行するメソッドの記述
// resorces/views/に置かれたView用の.blade.phpファイルが参照される。
// Route::get('/', function(){
//   return view('posts/index'); 
// });
Route::get('/', 'PostController@index');

// /postにGETリクエストが来たらPostControllerのindexメソッドを実行する。
Route::get('/posts', 'PostController@index');
