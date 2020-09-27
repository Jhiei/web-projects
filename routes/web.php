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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/menu', 'App\Http\Controllers\PagesController@menu');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');

Route::get('/saveemail', 'App\Http\Controllers\UserEmailsController@create');
Route::post('/saveemail', 'App\Http\Controllers\UserEmailsController@store');

Route::get('/savequery', 'App\Http\Controllers\UserQueriesController@create');
Route::post('/savequery', 'App\Http\Controllers\UserQueriesController@store');