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


Route::get('/', function () {
    return view('home');
});

Route::get('/actu', function () {
    return view('actu');
});

Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/historique', function () {
    return view('historique');
});

Route::get('/stat', function () {
    return view('stat');
});

Route::get('/gallerie', function () {
    return view('gallerie');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();