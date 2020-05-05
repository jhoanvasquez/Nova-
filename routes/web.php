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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/reserva/busqueda', "ReservaController@busqueda");
Route::post('/user/busquedaUsuario', "UserController@busquedaUsuario");
Route::post('/reserva/busquedaReserva', "ReservaController@busquedaReserva");
Route::post('/reserva/guardar', "ReservaController@guardar");
Route::post('/user/guardar', "UserController@guardar");
Route::get('/reserva/today', "ReservaController@today");
Route::get('/reserva/inventario', "ReservaController@inventario");



Route::Resource('reserva', "ReservaController");
Route::Resource('user', "UserController");
Route::Resource('saldo', "SaldoController");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
