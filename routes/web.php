<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');

Route::view('/apropos', 'apropos')->name('apropos');

Route::view('/formations', 'formations')->name('formations');

Route::view('/services', 'services')->name('services');
Route::view('/users', 'users')->name('users');