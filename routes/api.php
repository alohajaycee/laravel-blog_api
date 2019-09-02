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

Route::middleware('post.origin')->group(function(){
    Route::prefix('v1')->group(function(){
        Route::get('posts', 'PostsController@index');
        Route::get('posts/{id}','PostsController@show');
    });
});