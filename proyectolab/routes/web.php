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
    return view('index');
});

Route::post('/','App\Http\Controllers\UserController@login')->name('user.login');

Route::get('/register','App\Http\Controllers\RegisterController@register')->name('user.register');
//revisar el /
Route::post('/registernewuser','App\Http\Controllers\RegisterController@registerUser')->name('user.registernewuser');

Route::post('/logout','App\Http\Controllers\UserController@logout')->name('user.logout');



Route::get('/reseteo','App\Http\Controllers\ForgotPasswordController@getEmail')->name('user.reseteo');

