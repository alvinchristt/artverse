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

Route::get('/daftarPage', 'App\Http\Controllers\DaftarController@DaftarPage'); 
Route::post('/daftar', 'App\Http\Controllers\DaftarController@Daftar'); 

Route::get('/loginPage', 'App\Http\Controllers\LoginController@LoginPage');
Route::post('/login', 'App\Http\Controllers\LoginController@Login');

// Route::get('/', 'App\Http\Controllers\HalamanUtamaController@HomePage');
Route::get('/', 'App\Http\Controllers\DetailLukisanController@LukisanPage');

