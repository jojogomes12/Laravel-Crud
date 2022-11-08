<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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






Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create');
Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');
Route::get('/produtos/ver/{id}', 'App\Http\Controllers\ProdutosController@show');
Route::post('/produtos/ver/{id}', 'App\Http\Controllers\ProdutosController@show')->name('ver_produto');
Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
Route::post('/produtos/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
Route::get('/produtos/excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
Route::post('/produtos/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');
Route::get('/produtos/lista', 'App\Http\Controllers\ProdutosController@listar');
Route::get('/', 'App\Http\Controllers\ProdutosController@listar');
Route::post('/produtos/procurar/','App\Http\Controllers\ProdutosController@buscar')->name('buscar');











