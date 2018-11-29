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

Route::get('home', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/inicio',function (){
  return view ('bienvenida');
});

Auth::routes();

Route::resource('cliente','ClienteController');

//Route::get('/','HomeController@index');
Route::post('boleto\agrega-cliente','MateriaController@agregaCliente')->name('boleto.agregaCliente');
Route::resource('boleto','BoletoController');
Route::resource('cliente','ClienteController');
Route::resource('boleto.cliente','BoletoClienteController');//conexion para controlador pivote

Route::get('/',function(){
	return view('admin.dashboard');
});

?>