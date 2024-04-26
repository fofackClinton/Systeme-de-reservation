<?php

use App\Http\Controllers\ChambreController;
use App\Http\Controllers\frontOfficeController;
use App\Http\Controllers\OccupationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UtilisateurController;
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

//route pour le front office

Route::get("/",[frontOfficeController::class,"index"])->name('acceuil');
Route::get("/listeChambres",[frontOfficeController::class,'liste'])->name('listesChambres');
Route::get("/chambresDetaile/{id}",[frontOfficeController::class,'detail'])->name('chambresDetaile');
Route::post("/chambresDisponible/{id}",[frontOfficeController::class,'dispo'])->name('chambDispo');
Route::post("/chambresReserver",[frontOfficeController::class,'reserver'])->name('chambReserver');
Route::post("/chambreslisting",[frontOfficeController::class,'listing'])->name('chambListing');
Route::get("/chambre/listes",[ChambreController::class,'liste'])->name('chambre.liste');


//fin
//securite routes
Route::get('/users/deconnexion', [UtilisateurController::class, 'deconnexion'])->name('logout');
Route::post('/users/connexion', [UtilisateurController::class, 'connexion'])->name('connect');
Route::get('/users/log', [UtilisateurController::class, 'login'])->name('login');

//fin securite routes
Route::middleware(['auth'])->group(function(){
Route::get("/admin",[frontOfficeController::class,'admin'])->name('AppAdmin');

Route::prefix('/chambre')->name('chambre.')->controller(ChambreController::class)->group(function(){

    route::get('/','index')->name('index');
    route::get('/detail','detail')->name('detail');
    route::get('/creer','create')->name('creer');
    route::post('/enregistrer','store')->name('enregistrer');
    route::get('/modifier/{chambre}','edit')->name('modifier');
    route::put('/miseAjour/{id}','update')->name('miseAjour');
    route::get('/suprimer/{id}','destroy')->name('suprimer');
});


Route::prefix('/reservation')->name('reservation.')->controller(ReservationController::class)->group(function(){

    route::get('/','index')->name('index');
    route::get('/detail','detail')->name('detail');
    route::get('/create','create')->name('creer');
    route::post('/enregistrer','store')->name('enregistrer');
    route::get('/modifier{reservation}','edit')->name('modifier');
    route::put('/miseAjour{reservation}','update')->name('miseAjour');
    route::get('/historique','historique')->name('historique');
    route::get('/suprimer/{reservation}','destroy')->name('suprimer');
    route::get('/valider/{reservation}','valider')->name('valider');
    route::get('/annuler/{reservation}','annuler')->name('annuler');
});

Route::prefix('/utilisateur')->name('utilisateur.')->controller(UtilisateurController::class)->group(function(){

    route::get('/','index')->name('index');
    route::get('/detail','detail')->name('detail');
    route::get('/creer','create')->name('creer');
    route::post('/enregistrer','store')->name('enregistrer');
    route::get('/modifier','edit')->name('modifier');
    route::post('/miseAjour','update')->name('miseAjour');
    route::post('/suprimer','destroy')->name('suprimer');
});

Route::prefix('/occupation')->name('occupation.')->controller(OccupationController::class)->group(function(){

    route::get('/','index')->name('index');
    route::get('/histoeique','index')->name('historique');
    route::get('/creer','create')->name('creer');
    route::post('/enregistrer','store')->name('enregistrer');
    route::get('/modifier/{Occupation}','edit')->name('modifier');
    route::put('/miseAjour/{Occupation}','update')->name('miseAjour');
    route::get('/suprimer/{Occupation}','destroy')->name('suprimer');
    route::get('/historique','historique')->name('historique');
    route::get('/paiemant/{id}','paiement')->name('paiement');
    route::post('/payer/{id}','payer')->name('payer');

});
});
