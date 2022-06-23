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

Route::get('/produtos', 
    'App\Http\Controllers\ProdutoController@listagem')->name('produto.listagem');

Route::get('/produto_editar/{codigo}', 
    'App\Http\Controllers\ProdutoController@editar')->name('produto.editar');

Route::post('/produto_update/{codigo}', 
    'App\Http\Controllers\ProdutoController@update')->name('produto.update');

Route::get('/cliente', 
    'App\Http\Controllers\ClienteController@listagem')->name('cliente.listagem');

Route::get('/cliente_editar/{codigo}', 
    'App\Http\Controllers\ClienteController@editar')->name('cliente.editar');

Route::post('/cliente_update/{codigo}', 
    'App\Http\Controllers\ClienteController@update')->name('cliente.update');

Route::get('/venda', 
    'App\Http\Controllers\VendaController@listagem')->name('venda.listagem');

Route::get('/venda_editar/{codigo}', 
    'App\Http\Controllers\VendaController@editar')->name('venda.editar');

Route::post('/venda_update/{codigo}', 
    'App\Http\Controllers\VendaController@update')->name('venda.update');