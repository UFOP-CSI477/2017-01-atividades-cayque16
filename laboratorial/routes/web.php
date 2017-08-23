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
    return view('principal');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pacientes', function() {
    return view('pacientes');
});

Route::get('/erro', function() {
    return view('erro');
});

Route::get('/admin', function(){
    return view('admin');
});

Route::resource('/geral','ProceduresController');

Route::resource('/listar','ListarTestsController');

Route::resource('/testes','TestsController');

Route::resource('/users','AdminUsersController');

Route::resource('/procedimentos','AdminProceduresController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
