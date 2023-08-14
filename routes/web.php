<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\GoogleController;




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



Route::get('/auth/google/redirect', [GoogleController::class, 'redirectToGoogle'])->name('auth.google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



Route::view('/services', 'services')->name('services');
Route::view('/formations', 'formations')->name('formations');
Route::view('/projets', 'projets')->name('projets');
Route::view('/texte', 'texte')->name('texte');

Route::view('/dashbord', 'dashbord')->name('dashbord');
Route::view('/login', 'login')->name('login');
Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('inscription');

Route::post('/enregistrer-role', [InscriptionController::class, 'enregistrerRole'])->name('enregistrer.role');
Route::post('/inscription', [InscriptionController::class, 'register'])->name('inscription.register');

// routes/web.php

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');



Route::get('/projet', [ProjetController::class, 'ProjetListe'])->name('projet');
Route::get('/projet-ouverts', [ProjetController::class, 'ListeProjetOuverts'])->name('projet_ouvert');
Route::get('/projet-termines', [ProjetController::class, 'ListeProjetTermines'])->name('projet_termine');
Route::get('/projet-encours', [ProjetController::class, 'ListeProjetEncours'])->name('projet_encours');
Route::get('/projet/recherche', [ProjetController::class, 'recherche'])->name('recherche');

//Créer un projet
Route::get('/create_projet', [ProjetController::class, 'createProjetForm'])->name('create_projet');
Route::post('/create_projet', [ProjetController::class, 'store'])->name('create_projet');

//Déposer un projet
// Route::get('/depot_projet', [ProjetController::class, 'getValidate'])->name('depot_projet');
// Route::post('/depot_projet', [ProjetController::class, 'postValidate']);
//Les routes de projet
Route::get('/liste_projet', [ProjetController::class, 'listeProjets'])->name('liste_projet');
Route::post('/ajout_projet', [ProjetController::class, 'AjoutProjet'])->name('ajout_projet');
Route::get('/delete-projet/{id}', [ProjetController::class, 'delete'])->name('delete-projet');
Route::post('/edit_projet', [ProjetController::class, 'updateProjet'])->name('edit_projet');