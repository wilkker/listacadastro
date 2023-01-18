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


Route::get('/', 'App\Http\Controllers\CadastroController@index' ) ;
Route::get('/cadastro/criar', 'App\Http\Controllers\CadastroController@create' ) ;
Route::post('/cadastro/criar', 'App\Http\Controllers\CadastroController@store' ) ;
Route::get('/cadastro/edit/{id}', 'App\Http\Controllers\CadastroController@edit' ) ;
Route::put('/cadastro/update/{id}', 'App\Http\Controllers\CadastroController@update' ) ;
Route::delete('/cadastro/{id}', 'App\Http\Controllers\CadastroController@destroy' ) ;
Route::get('/cadastro/export', 'App\Http\Controllers\CadastroController@exportexcel' ) ;



