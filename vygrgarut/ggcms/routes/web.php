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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group([
    'prefix' => 'blog', // Must match its `slug` record in the DB > `data_types`
    'middleware' => ['web'],
    'as' => 'voyager-blog-custom.blog.',
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/', ['uses' => 'PostController@getPosts', 'as' => 'list']);
    Route::get('/{category}', ['uses' => 'PostController@getPostsCategory', 'as' => 'category']);
    Route::get('{category}/{slug}', ['uses' => 'PostController@getPost', 'as' => 'post']);
});