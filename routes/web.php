<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
// use App\Http\Controllers\ProjetValidateController;

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
//Créer un projet
Route::get('/create_projet', [ProjetController::class, 'createProjetForm'])->name('create_projet');
Route::post('/create_projet', [ProjetController::class, 'store']);
// Route::view('/create_projet', 'dashboard_client.create_projet')->name('create_projet');
//Déposer un projet
// Route::view('/depot_projet', 'dashboard_client.depot_projet')->name('depot_projet');
Route::get('/depot_projet', [ProjetController::class, 'getValidate'])->name('depot_projet');
Route::post('/depot_projet', [ProjetController::class, 'postValidate']);
//Lister les produits
// Route::view('/liste_projet', 'dashboard_client.liste_projet')->name('liste_projet');
Route::get('/liste_projet', [ProjetController::class, 'listeProjets'])->name('liste_projet');
Route::post('/liste_projet', [ProjetController::class, 'AjoutProjet']);
Route::get('/delete-projet/{id}', [ProjetController::class, 'delete'])->name('delete-projet');

Route::get('/liste_projet/{projet_id}', [ProjetController::class, 'edit'])->name('edit_projet');
Route::post('/liste_projet', [ProjetController::class, 'updateProjet']);

//validation d'un dépot
Route::view('/validate_projet', 'dashboard_client.validate_projet')->name('validate_projet');

// Route::view('/projets', 'projets')->name('projets');

Route::view('/dashboard', 'dashboard_client.dashboard')->name('dashboard');

Route::view('/profil', 'dashboard_client.profil')->name('profil');

Route::view('/profil_client', 'dashboard_client.profil_client')->name('profil_client');

Route::view('/formations', 'formations')->name('formations');

Route::view('/contact', 'contact')->name('contact');

Route::view('/maintenance', 'maintenance')->name('maintenance');

Route::view('/partenaires', 'partenaires')->name('partenaires');

Route::view('/dashbord', 'dashbord')->name('dashbord');

Route::view('/liste_utilisateur', 'liste_utilisateur')->name('liste_utilisateur');

Route::view('/factures', 'factures')->name('factures');

