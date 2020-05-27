<?php 

Route::get('/', 'AccountController@index')->name('minha_conta');
Route::get('/logs', 'LogController@index')->name('listar_logs_user');
