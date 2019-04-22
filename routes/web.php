<?php

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



Route::get('/main', 'MainController@main');

Route::get('/equipe', 'PlayerController@play');

Route::get('/actu', 'ActuController@actu');

Route::get('/stat', 'StatController@stat');

Route::get('/match', 'MatchController@match');

Route::get('/formulaire', 'FormulaireController@form');

Route::get('/compo', 'CompoController@comp');

Route::get('/gallerie', 'GallerieController@gallerie');

Route::get('/historique', 'HistoriqueController@histo');

Route::get('/article', 'ArticleController@article');



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
