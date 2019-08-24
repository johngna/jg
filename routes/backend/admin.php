<?php

use App\Http\Controllers\Backend\DashboardController;



// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('clientes/lista', '\App\Http\Controllers\Backend\Clientes\ClienteController@lista')->name('cliente.lista');

Route::resource('modulo', '\App\Http\Controllers\Backend\Modulo\ModuloController');
Route::resource('campos', '\App\Http\Controllers\Backend\Campo\CampoController');
Route::resource('clientes', '\App\Http\Controllers\Backend\Clientes\ClienteController');
Route::resource('enderecos', '\App\Http\Controllers\Backend\Enderecos\EnderecoController');


Route::get('edit_campos/{campo_id}', '\App\Http\Controllers\Backend\Campo\CampoController@edit_campos')->name('edit_campos');
Route::get('lista_campos/{modulo_id}', '\App\Http\Controllers\Backend\Campo\CampoController@lista_campos')->name('lista_campos');

Route::post('modulo/campos', '\App\Http\Controllers\Backend\Modulo\ModuloController@campos')->name('modulo.campos');

