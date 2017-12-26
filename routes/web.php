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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['app' => ['Clientes']], function(){
    Route::get('/clientes', 'ClientesController@index')->name('clientes');
    Route::get('/clientes/create', 'ClientesController@create')->name('clientes');
    Route::post('/clientes/create', 'ClientesController@create')->name('clientes');    
    Route::get('/clientes/lista', 'ClientesController@index')->name('clientes');
    Route::get('/clientes/{cliente}/update', 'ClientesController@update');
    Route::post('/clientes/{cliente}/update', 'ClientesController@update');
    Route::get('/clientes/{cliente}/delete', 'ClientesController@delete');
});

Route::group(['app' => ['Produtos']], function(){
    Route::get('/produtos', 'ProdutosController@index')->name('produtos');
    Route::get('/produtos/create', 'ProdutosController@create')->name('produtos');
    Route::post('/produtos/create', 'ProdutosController@create')->name('produtos');    
    Route::get('/produtos/lista', 'ProdutosController@index')->name('produtos');
    Route::get('/produtos/{cliente}/update', 'ProdutosController@update');
    Route::post('/produtos/{cliente}/update', 'ProdutosController@update');
    Route::get('/produtos/{cliente}/delete', 'ProdutosController@delete');
});

Route::group(['app' => ['Usuarios']], function(){
    Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');
    Route::get('/usuarios/create', 'UsuariosController@create')->name('usuarios');
    Route::post('/usuarios/create', 'UsuariosController@create')->name('usuarios');    
    Route::get('/usuarios/lista', 'UsuariosController@index')->name('usuarios');
    Route::get('/usuarios/{usuario}/update', 'UsuariosController@update');
    Route::post('/usuarios/{usuario}/update', 'UsuariosController@update');
    Route::get('/usuarios/{usuario}/delete', 'UsuariosController@delete');
});

Route::group(['middleware' => ['web']], function(){
    Route::get('/', 'HomeController@index');
});