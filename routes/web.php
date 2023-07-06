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
Route::view('/step2', 'step2')->name('step2');
Route::view('/step3', 'step3')->name('step3');
Route::view('/step4', 'step4')->name('step4');
Route::view('/step5', 'step5')->name('step5');
Route::view('/step6', 'step6')->name('step6');
Route::view('/step7', 'step7')->name('step7');
Route::view('/step8', 'step8')->name('step8');
Route::view('/laststep', 'laststep')->name('laststep');
Route::view('/factureclient', 'factureclient')->name('factureclient');
Route::view('/facture_client_autre', 'facture_client_autre')->name('facture_client_autre');
