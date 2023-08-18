<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LoginController;

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
Route::view('/step2', 'step2')->name('step2');
Route::view('/step3', 'step3')->name('step3');
Route::view('/step4', 'step4')->name('step4');
Route::view('/step5', 'step5')->name('step5');
Route::view('/step6', 'step6')->name('step6');
Route::view('/step7', 'step7')->name('step7');
Route::view('/step8', 'step8')->name('step8');
Route::view('/laststep', 'laststep')->name('laststep');

Route::view('/apropos', 'apropos')->name('apropos');

//Déposer un projet
// Route::get('/depot_projet', [ProjetController::class, 'getValidate'])->name('depot_projet');
// Route::post('/depot_projet', [ProjetController::class, 'postValidate']);
//Les routes de projet


Route::view('/contact', 'contact')->name('contact');

Route::view('/maintenance', 'maintenance')->name('maintenance');

Route::view('/prestataires', 'prestataires')->name('prestataires');

Route::view('/profil_administrateur', 'profil_administrateur')->name('profil_administrateur');

Route::view('/modification_mdp', 'modification_mdp')->name('modification_mdp');



//
//
// Route::view('/dashbord', 'dashbord')->name('dashbord');
// Route::view('/login', 'login')->name('login');
Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('inscription');

// Route::post('/enregistrer-role', [InscriptionController::class, 'enregistrerRole'])->name('enregistrer.role');
Route::post('/inscription', [InscriptionController::class, 'register'])->name('inscription.register');

// routes/web.php

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/connecte', [LoginController::class, 'apresConnexion'])->name('apres_connexion');
Route::view('/chargement', 'chargement')->name('chargement');

Route::prefix('/')->middleware('auth', 'role:client')->group(function () {
    Route::view('/dashboard', 'dashboard_client.dashboard')->name('dashboard');
    Route::get('/edit-profil-client/{id}', [ClientController::class, 'editProfil'])->name('edit_profil_client');
    Route::Post('/edit-profil-client', [ClientController::class, 'editProfilClient'])->name('edit_profil_cl');

    Route::view('/profil', 'dashboard_client.profil')->name('profil');

    // Route::view('/profil_client', 'dashboard_client.profil_client')->name('profil_client');

    //Liste des utilisateurs
    // Route::view('/liste_utilisateur', 'liste_utilisateur')->name('liste_utilisateur');
    Route::get('/liste_utilisateur', [ClientController::class, 'listeClients'])->name('liste_utilisateur');
    Route::get('/liste_projet', [ProjetController::class, 'listeProjets'])->name('liste_projet');

    Route::post('/ajout_projet', [ProjetController::class, 'AjoutProjet'])->name('ajout_projet');
    Route::get('/delete-projet/{id}', [ProjetController::class, 'delete'])->name('delete-projet');
    Route::post('/edit_projet', [ProjetController::class, 'updateProjet'])->name('edit_projet');


    //validation d'un dépot
    Route::view('/validate_projet', 'dashboard_client.validate_projet')->name('validate_projet');

    //Créer un projet
    Route::get('/create_projet', [ProjetController::class, 'createProjetForm'])->name('create_projet');
    Route::post('/create_projet', [ProjetController::class, 'store'])->name('create_projet');

    //Liste des factures
    // Route::view('/factures', 'factures')->name('factures');
    Route::get('/factures', [FactureController::class, 'listeFactures'])->name('factures');
    Route::get('/delete-facture/{id}', [FactureController::class, 'delete'])->name('delete-facture');
    Route::post('/edit_facture', [FactureController::class, 'updateFacture'])->name('edit_facture');
    Route::get('/factures/recherche', [FactureController::class, 'recherche'])->name('recherche_facture');

    Route::get('/projet', [ProjetController::class, 'ProjetListe'])->name('projet');
    Route::get('/projet-ouverts', [ProjetController::class, 'ListeProjetOuverts'])->name('projet_ouvert');
    Route::get('/projet-termines', [ProjetController::class, 'ListeProjetTermines'])->name('projet_termine');
    Route::get('/projet-encours', [ProjetController::class, 'ListeProjetEncours'])->name('projet_encours');
    Route::get('/projet/recherche', [ProjetController::class, 'recherche'])->name('recherche');
});
