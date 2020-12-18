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

Route::get('/', 'App\Http\Controllers\PaymentsController@get');

Route::get('/add/payments','App\Http\Controllers\PaymentsController@add');
Route::post('/POST/payments','App\Http\Controllers\PaymentsController@post')->name('post');
Route::get('/GET/payments','App\Http\Controllers\PaymentsController@get');
Route::post('/DELETE/payments','App\Http\Controllers\PaymentsController@deleteAll')->name('delete');