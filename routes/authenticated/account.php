<?php 

Route::get('/', 'AccountController@index')->name('account.page.index');
Route::get('/change-password', 'AccountController@editPassword')->name('account.page.edit-password');
Route::post('/change-password', 'AccountController@updatePassword')->name('account.action.update-password');
Route::get('/logs', 'LogController@index')->name('listar_logs_user');
