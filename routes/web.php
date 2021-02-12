<?php

use App\Http\Controllers\MembreController;
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

// Créer un nouveau projet laravel_crud_update_exo_2
// Créer une DB laravel_crud_update_exo_2
// Télécharger la liste des membres que je vous avait donné et l'upload dans cette nouvelle DB
// Créer un système pour :
// Le genre du membre doit etre choisis avec un selection option
// Afficher tous les membres dans une view
// Pouvoir Créer des membres
// Pouvoir afficher chaque membre un par un
// Pouvoir éditer chaque membre et l'update
// Pouvoir Supprimer chaque membre
// Avoir un bouton qui permet de supprimer tous les membres d'un coups



Route::get('/', [MembreController::class, 'index']);
Route::get('/create', [MembreController::class, 'create']);
Route::post('/store-membre', [MembreController::class, 'store']);
Route::get('/show-membre/{id}', [MembreController::class, 'show']);
Route::get('/edit-membre/{id}', [MembreController::class, 'edit']);
Route::post('/update-membre/{id}', [MembreController::class, 'update']);
Route::post('/delete-membre/{id}', [MembreController::class, 'destroy']);
Route::post('/delete-all', [MembreController::class, 'delete']);