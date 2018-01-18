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
Route::get('/', 'HomeController@welcome');
Route::get('/news/{category}', 'HomeController@news');
// Admin routers
Auth::routes();
Route::get('/logout', 'HomeController@logout')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/news', 'NewsController@index')->middleware('auth');

Route::get('/create', 'NewsController@create')->middleware('auth');
Route::get('/create_sponser', 'NewsController@createe')->middleware('auth');

Route::post('/news/create', 'NewsController@save')->middleware('auth');
Route::post('/', 'NewsController@insert')->middleware('auth');
Route::post('/news/delete/{id}', 'NewsController@delete')->middleware('auth');
Route::get('/category', 'CategoryController@index')->middleware('auth');
Route::post('/category/create', 'CategoryController@save')->middleware('auth');

// Admin routers End