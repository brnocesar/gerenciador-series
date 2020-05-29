<?php 

Route::get('/', 'AccountController@index')->name('minha_conta');
Route::get('/change-password', 'AccountController@editPassword')->name('account.page.edit-password');
Route::get('/logs', 'LogController@index')->name('listar_logs_user');
