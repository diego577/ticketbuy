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

Route::get('/inicio',function (){
  return view ('bienvenida');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::post('boleto\agrega-cliente','MateriaController@agregaCliente')->name('boleto.agregaCliente');
Route::resource('boleto','BoletoController');
Route::resource('cliente','ClienteController');
//Route::resource('usuario','UsuarioController');
Route::resource('boleto.cliente','BoletoClienteController');//conexion para controlador pivote

?>