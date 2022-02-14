<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceipeController;
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


// Affiche la liste des recettes
Route::get('/', [ReceipeController::class, 'index'])->name('riri');
 
// Affiche le formulaire
Route::get('/form', [ReceipeController::class, 'toto']);
Route::post('/form', [ReceipeController::class, 'titi']);
 
// Enregistre les données du formulaire dans la base de données
//Route::post('store-receipe', [ReceipeController::class, 'store'])->name('store-receipe');