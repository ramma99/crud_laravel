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

Route::get('/', [\App\Http\Controllers\ipang::class, 'rama']);

Auth::routes();

Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/home', App\Http\Controllers\crud::class);
