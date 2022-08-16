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
    return view('welcome');
});

Route::get('/contato', 'ContatoController@index');
Route::post('/contato/enviar', 'ContatoController@enviar');

Route::any('/produtos/ordem', 'ProdutosController@ordem')->name('ordem');
Route::any('/produtos/busca', 'ProdutosController@busca')->name('busca');
Route::resource('/produtos', 'ProdutosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
