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
*/

Route::get('/', function () {
    return view('inizio');
});

Route::get("login", "App\Http\Controllers\LoginController@login_form")->name("login");
Route::get("register", "App\Http\Controllers\RegisterController@register_form")->name('register');
Route::get('home', "App\Http\Controllers\HomeController@home")->name('home');
Route::get('profilo', "App\Http\Controllers\ProfiloController@profilo")->name('profilo');

Route::post('login', "App\Http\Controllers\LoginController@do_login");
Route::post('register', "App\Http\Controllers\RegisterController@do_register");

Route::get('logout',"App\Http\Controllers\LoginController@logout");

Route::get('home', "App\Http\Controllers\HomeController@home");
Route::get('preferiti', "App\Http\Controllers\HomeController@list");
Route::get('cancella', "App\Http\Controllers\HomeController@cancellaList");
Route::get('elimina', "App\Http\Controllers\ProfiloController@elimina");
Route::get('thesportsdb/{contenuto}', "App\Http\Controllers\HomeController@cerca");
Route::post('like', "App\Http\Controllers\HomeController@like");
Route::post('unLike', "App\Http\Controllers\HomeController@unLike");
Route::post('disLike', "App\Http\Controllers\HomeController@disLike");
