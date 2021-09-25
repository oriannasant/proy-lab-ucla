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
//->middleware('auth')
Route::post('/','App\Http\Controllers\UserController@login')
->name('user.login');

//Route::get('/','App\Http\Controllers\UserController@login')->name('login.index');
//->middleware('guest')

Route::post('/logout','App\Http\Controllers\UserController@logout')->name('user.logout');
//->middleware('auth')

Route::resource('pensums','App\Http\Controllers\PensumController');

Route::get('/registerpensum','App\Http\Controllers\PensumController@index')->name('pensum.registerpensum');


Route::resource('users','App\Http\Controllers\UserRegisterController');

Route::get('/register','App\Http\Controllers\UserRegisterController@create')->name('user.register');