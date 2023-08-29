<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

//Création d'une route qui permet d'afficher la liste des étudiants sur la page d'accueil, une vue 
Route::get('/etudiant', [EtudiantController::class, 'Liste_etudiant']);

//Création d'une route qui permet d'ajouter un étudiant
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);

//Création d'une route qui permet d'ajouter un étudiant dans la BD
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);

//Création d'une vue qui permet de modifier un étudiant
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);

//Création d'une route qui permet de modifier un étudiant
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);

//Création d'une route qui permet de supprimer un étudiant
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);



