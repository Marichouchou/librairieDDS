<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/abonne-register', [App\Http\Controllers\AbonnesController::class, 'viewForm'])->name('abonne.formview');
Route::post('/abonne-create', [App\Http\Controllers\AbonnesController::class, 'registerAbonne'])->name('abonne.create');

Route::get('/fournisseur-register', [App\Http\Controllers\FournisseursController::class, 'viewForm'])->name('fournisseur.formview');
Route::post('/fournisseur-create', [App\Http\Controllers\FournisseursController::class, 'registerFournisseur'])->name('fournisseur.create');

Route::get('/livre-register', [App\Http\Controllers\LivresController::class, 'viewForm'])->name('livre.formview');
Route::post('/livre-create', [App\Http\Controllers\LivresController::class, 'registerLivres'])->name('livres.create');