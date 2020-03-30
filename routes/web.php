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

Route::get('/', 'PastelController@muestra');

Route::post('/guardaPastel', 'PastelController@guardaPastel');

Route::get('/editar/{id}', 'PastelController@muestraEdicion');

Route::post('/guardarEdicion', 'PastelController@guardaEdicion');

Route::get('/borrar/{id}', 'PastelController@borrar');

Route::resource('cliente', 'ClienteController');