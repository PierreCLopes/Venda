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