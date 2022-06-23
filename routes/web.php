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
    return view('welcome');
});

Route::get('/produtos/inserir', 
    'App\Http\Controllers\ProdutoController@inserir')->name('produto.inserir');

Route::get('/produtos', 
    'App\Http\Controllers\ProdutoController@listagem')->name('produto.listagem');

Route::get('/produto_editar/{codigo}', 
    'App\Http\Controllers\ProdutoController@editar')->name('produto.editar');

Route::get('/produto_deletar/{codigo}', 
    'App\Http\Controllers\ProdutoController@deletar')->name('produto.deletar');

Route::post('/produto_update/{codigo}', 
    'App\Http\Controllers\ProdutoController@update')->name('produto.update');

Route::post('/produtos/create', 
    'App\Http\Controllers\ProdutoController@create')->name('produto.create');


Route::get('/clientes/inserir', 
    'App\Http\Controllers\ClienteController@inserir')->name('cliente.inserir');

Route::get('/clientes', 
    'App\Http\Controllers\ClienteController@listagem')->name('cliente.listagem');

Route::get('/cliente_editar/{codigo}', 
    'App\Http\Controllers\ClienteController@editar')->name('cliente.editar');

Route::get('/cliente_deletar/{codigo}', 
    'App\Http\Controllers\ClienteController@deletar')->name('cliente.deletar');

Route::post('/cliente_update/{codigo}', 
    'App\Http\Controllers\ClienteController@update')->name('cliente.update');

Route::post('/clientes/create', 
    'App\Http\Controllers\ClienteController@create')->name('cliente.create');


Route::get('/vendas/inserir', 
    'App\Http\Controllers\VendaController@inserir')->name('venda.inserir');

Route::get('/venda_deletar/{codigo}', 
    'App\Http\Controllers\VendaController@deletar')->name('venda.deletar');

Route::get('/venda', 
    'App\Http\Controllers\VendaController@listagem')->name('venda.listagem');

Route::get('/venda_editar/{codigo}', 
    'App\Http\Controllers\VendaController@editar')->name('venda.editar');

Route::post('/venda_update/{codigo}', 
    'App\Http\Controllers\VendaController@update')->name('venda.update');

Route::post('/vendas/create', 
    'App\Http\Controllers\VendaController@create')->name('venda.create');



