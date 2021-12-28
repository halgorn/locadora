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

# Rota para leitura dos dados de dvd
Route::get('/dvds/ver', 'App\Http\Controllers\DvdsController@show')->name('mostrar_dvd');

#mostrar excluir por id
Route::get('/dvds/del/{id}', 'App\Http\Controllers\DvdsController@excluir')->name('excluir_dvd');

#mostrar editar por id
Route::get('/dvds/edit/{id}', 'App\Http\Controllers\DvdsController@edit')->name('editar_dvd');

#salvar dados no edit
Route::post('/dvds/edit/{id}', 'App\Http\Controllers\DvdsController@update')->name('atualizar_dvd');

# rota para o login
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
#rotas para o menu laravel, quando logado

Route::post('/', 'App\Http\Controllers\DvdsController@home')->name('home');

#mostrar usuarios
Route::get('/usuarios/usuarioShow', 'App\Http\Controllers\UsuarioController@show')->name('mostrar_usuario');


