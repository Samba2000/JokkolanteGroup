<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LoginController;
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
// routes/web.php

Route::group(['middleware' => 'auth'], function () {
    Route::view('/admin', 'dashboard')->name('dashboard');
    Route::view('/client', 'client.dashboard')->name('client.dashboard');
    Route::view('/prestataire', 'prestataire.dashboard')->name('prestataire.dashboard');
});



Route::view('/services', 'services')->name('services');
Route::view('/formations', 'formations')->name('formations');

Route::view('/dashbord', 'dashbord')->name('dashbord');
Route::view('/login', 'login')->name('login');
Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('inscription');

Route::post('/enregistrer-role', [InscriptionController::class, 'enregistrerRole'])->name('enregistrer.role');
Route::post('/inscription', [InscriptionController::class, 'register'])->name('inscription.register');

// routes/web.php

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

