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

//Route::post('/dvds/novo', 'DvdsController@create');

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

#Route::get('/dvds/ver', 'App\Http\Controllers\LocacaoController@locacaoShow')->name('mostrar_locacaoDvd');

#Route::get('/dvds/ver', 'App\Http\Controllers\DvdsController@locacaoShow')->name('mostrar_locacao_dvd');
# rota para o login
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
#rotas para o menu laravel, quando logado

Route::post('/', 'App\Http\Controllers\DvdsController@home')->name('home');




#ROTAS PARA USUARIO

#mostrar usuarios
Route::get('/usuarios/usuarioShow', 'App\Http\Controllers\UsuarioController@show')->name('mostrar_usuario');

#excluir por id usuario
Route::get('/usuarios/del/{id}', 'App\Http\Controllers\UsuarioController@ExcluirUsuario')->name('excluir_usuario');


#criar usuario
Route::get('/usuarios/usuarioCreate', 'App\Http\Controllers\UsuarioController@create');
#Route::get('/dvds/novo',              'App\Http\Controllers\DvdsController@create');

#Rota de Post para o formulario usuario
Route::post('/usuarios/usuarioCreate', 'App\Http\Controllers\UsuarioController@store')->name('registrar_usuario');
#Route::post('/dvds/novo',              'App\Http\Controllers\DvdsController@store')->name('registrar_dvd');
#Rota de acesso ao formulario


#Rota de Post para o formulario


#mostrar editar por id
Route::get('/usuarios/edit/{id}', 'App\Http\Controllers\UsuarioController@Edit')->name('editar_usuario');
#Route::get('/dvds/edit/{id}', 'App\Http\Controllers\DvdsController@edit')->name('editar_dvd');


#salvar dados no edit
Route::post('/usuarios/edit/{id}', 'App\Http\Controllers\UsuarioController@update')->name('atualizar_usuario');
#Route::post('/dvds/edit/{id}', 'App\Http\Controllers\DvdsController@update')->name('atualizar_dvd');


#ROTAS PARA LOCA????O

#Rota de acesso ao formulario
Route::get('/locacao/show', 'App\Http\Controllers\LocacaoController@create');

#Rota de Post para o formulario loca????o
Route::post('/locacao/show', 'App\Http\Controllers\LocacaoController@store')->name('registrar_locacao');

Route::get('/locacao/ver', 'App\Http\Controllers\LocacaoController@show')->name('mostrar_locacao');

#Route::get('dashboard', 'App\Http\Controllers\LocacaoController@show')->name('mostrar_locacao_home');

Route::post('/locacao/devolucao/{id}', 'App\Http\Controllers\LocacaoController@devolucaoUser')->name('devolucao_user_1');

Route::get('/locacao/devolucao/{id}', 'App\Http\Controllers\LocacaoController@edit')->name('devolucao_user');
#Route::post('/Locaocao/edit/{id}', 'App\Http\Controllers\DvdsController@devolucaoUser')->name('atualizar_dvd');

Route::post('/locacao/devolucaoAdmin/{id}', 'App\Http\Controllers\LocacaoController@devolucaoAdmin')->name('devolucao_admin_1');

Route::get('/locacao/devolucaoAdmin/{id}', 'App\Http\Controllers\LocacaoController@editAdmin')->name('devolucao_admin');




