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

Route::view('/', 'welcome')->name('home');

Route::view('/step1', 'step1')->name('step1');

Route::view('/apropos', 'apropos')->name('apropos');

// Route::view('/formations', 'formations')->name('formations');

Route::view('/projet', 'projet')->name('projet');

// Route::view('/projets', 'projets')->name('projets');

Route::view('/dashboard', 'dashboard_client.dashboard')->name('dashboard');

Route::view('/profil', 'dashboard_client.profil')->name('profil');

Route::view('/profil_client', 'dashboard_client.profil_client')->name('profil_client');

Route::view('/formations', 'formations')->name('formations');

Route::view('/contact', 'contact')->name('contact');

Route::view('/maintenance', 'maintenance')->name('maintenance');

Route::view('/partenaires', 'partenaires')->name('partenaires');
