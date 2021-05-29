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
    return view('auth/login');
});

Route::resource('zonaTuristica' , 'ZonaTuristicaController');
Route::resource('historia' , 'HistoriaController');
Route::resource('hospedaje' , 'HospedajeController');
Route::resource('restaurante' , 'RestauranteController');
Route::resource('galeria' , 'GaleriaController');
Route::resource('actividad' , 'ActividadController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
