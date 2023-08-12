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

    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/authentification', 'AdminController@auth')->name('auth');
    Route::get('/a_propos_de_nous', 'PagesController@about')->name('about');
    Route::get('/nos_realisation', 'PagesController@realisation')->name('realisation');
    Route::get('/contacter_nous', 'PagesController@contact')->name('contact');
    Route::get('/mediathèques', 'PagesController@media')->name('media');
    Route::get('/nos_publication', 'PagesController@pubs')->name('publications');

    Route::get('dashboard', 'AdminController@index')->name('dashboard');

    Route::resource('gestion_pubs', PubController::class);
    Route::get('destroy_pubs/{id}','PubController@destroy');

    Route::resource('gestion_services', ServiceController::class);
    Route::get('destroy_services/{id}','ServiceController@destroy');

    Route::resource('gestion_realisation', RealisationController::class);
    Route::get('destroy_realisation/{id}','RealisationController@destroy');

    Route::resource('gestion_partenaire', PartenaireController::class);
    Route::get('destroy_partenaire/{id}','PartenaireController@destroy');

    Route::resource('gestion_teams', MembreController::class);
    Route::get('destroy_teams/{id}',[MembreController::class,'destroy']);

    Route::resource('gestion_medias', MediaController::class);
    Route::get('destroy_medias/{id}',[MediaController::class,'destroy']);

    Route::resource('gestion_messages', MessageController::class);
    Route::get('destroy_message/{id}',[MessageController::class,'destroy']);

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('deconnexion', [AuthController::class, 'logout'])->name('logout');

