<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fournisseurcontroller;
use App\Http\Controllers\articlecontroller;

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
    return view('tp');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// les routes de fournisseurs

Route::get('/liste-fournisseurs', [fournisseurcontroller::class, 'fournisseurs'])->name('liste-fournisseurs');
Route::get('/liste-fournisseurs/agadir', [fournisseurcontroller::class, 'agadir'])->name('liste-fournisseurs-agadir');
Route::get('/liste_name_and_ville', [fournisseurcontroller::class, 'nomandvill'])->name('liste-nom-ville');
Route::get('/liste_ville', [fournisseurcontroller::class, 'distinctvilles'])->name('liste-ville');



// les routes d'articles
Route::get('/liste-articles', [articlecontroller::class, 'articles'])->name('liste-articles');
// Route::get('/liste_description_and_poids', [articlecontroller::class, 'descriptionandpoids'])->name('description-poids');
Route::get('/liste_description_poids', [articlecontroller::class, 'descriptionandpoids'])->name('description_poids');
Route::get('/liste_article/{id}', [articlecontroller::class, 'article'])->name('article_par_id');
Route::get('/liste_articles_vert', [articlecontroller::class, 'articlevert'])->name('article_par_couleur');
Route::get('/liste_articles_prix_achat', [articlecontroller::class, 'article_prix_achat'])->name('article_par_prix_achat');
Route::get('/liste-article_poids', [articlecontroller::class, 'article_poids'])->name('liste-par_poids');
Route::get('/nombre_article', [articlecontroller::class, 'nb_articles'])->name('nombre_articles');
Route::get('/moyenne', [articlecontroller::class, 'moyenne'])->name('moyenne');















