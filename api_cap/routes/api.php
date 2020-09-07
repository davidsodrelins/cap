<?php

Route::apiResource('usuarios', 'UsuarioController');
Route::get('saldo','UsuarioController@saldo');
Route::put('saque','UsuarioController@saque');
Route::put('deposito','UsuarioController@deposito');