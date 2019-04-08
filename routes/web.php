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


Route::get('/main', function () {
    return view('main');
});


Route::get('/equipe', 'PlayerController@play');

Route::get('/actu', 'ActuController@actu');

Route::get('/stat', 'StatController@stat');


Route::get('/historique', function () {
    return view('historique');
});

Route::get('/gallerie', function () {
    return view('gallerie');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
