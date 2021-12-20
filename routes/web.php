<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DvdsController;

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

//Route::get('/dvds/novo', 'DvdsController@create');

#Rota de acesso ao formulario
Route::get('/dvds/novo', 'App\Http\Controllers\DvdsController@create');

#Rota de Post para o formulario
Route::post('/dvds/novo', 'App\Http\Controllers\DvdsController@store')->name('registrar_dvd');

# Rota para leitura de formulario pelo ID
Route::get('/dvds/ver', 'App\Http\Controllers\DvdsController@show');

#mostrar uma lista de dvds
#Route::get('/dvds/list','App\Http\Controllers\DvdsController@show');