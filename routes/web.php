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

use App\Http\Controllers\DepartamentoControlador;
use App\Http\Controllers\ProdutoControlador;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProdutoControlador@index')->name('produtos');

Route::get('/departamentos', 'DepartamentoControlador@index')->name('departamentos');

Route::get('/usuario', function () {
    return view('usuario');
});