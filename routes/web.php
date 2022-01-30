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

Route::get('/', 'PostController@index');

// /postsにGETリクエストが来たらPostControllerのindexメソッドを実行する。
//Route::get('/posts', 'PostController@index');

// /posts/createにGETリクエストが来たらPostControllerのcreateメソッドを実行する。
Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{post}', 'PostController@show');

// /postsにPOSTリクエストが来たらPostControllerのstoreメソッドを実行する。
Route::post('/posts', 'PostController@store');

// ブログ投稿編集画面表示
Route::get('/posts/{post}/edit', 'PostController@edit');

// ブログ投稿編集実行
Route::put('/posts/{post}', 'PostController@update');

//ブログ投稿削除実行用ルーティング
Route::delete('/posts/{post}', 'PostController@delete');