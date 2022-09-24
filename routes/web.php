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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ajoute_artisan', function () {
    return view('ajoute_artisan');
})->name('ajoute_artisan');

Route::get('/liste_artisan', function () {
    return view('liste_artisan');
})->name('liste_artisan');

Route::get('/ajoute_utilisateur', function () {
    return view('ajoute_utilisateur');
})->name('ajoute_utilisateur');

Route::get('/modifier_utilisateur', function () {
    return view('modifier_utilisateur');
})->name('modifier_utilisateur');

Route::get('/supprimer_utilisateur', function () {
    return view('supprimer_utilisateur');
})->name('supprimer_utilisateur');

Route::get('/ajouter_stand', function () {
    return view('ajouter_stand');
})->name('ajouter_stand');

Route::get('/modifier_stand', function () {
    return view('modifier_stand');
})->name('modifier_stand');


