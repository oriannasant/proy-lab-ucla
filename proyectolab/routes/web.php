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
//admin
//Route::get('/welcome','App\Http\Controllers\RolController@view')->name('rol.welcome');


Route::post('/logout','App\Http\Controllers\UserController@logout')
->middleware('auth')
->name('user.logout');

Route::resource('pensums','App\Http\Controllers\PensumController');

Route::get('/registerpensum','App\Http\Controllers\PensumController@index')->name('pensum.registerpensum');


Route::resource('programs','App\Http\Controllers\ProgramController');

Route::get('/registerprogram','App\Http\Controllers\ProgramController@index')->name('program.registerprogram');


Route::resource('users','App\Http\Controllers\UserRegisterController');
//->middleware('admin')
Route::get('/list','App\Http\Controllers\UserRegisterController@index')->name('user.listar');

Route::get('/register','App\Http\Controllers\UserRegisterController@index')->name('user.register');


/*Route::get('/register', function () {
    return view('usuario.registration');
})->name('user.register');
*/


/*
->middleware('admin')
Route::get('/register','App\Http\Controllers\UserRegisterController@create')
->middleware('admin')
->name('user.register');*/