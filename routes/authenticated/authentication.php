<?php 

Auth::routes();
Route::get('/entrar', 'AutenticacaoController@index')->name('pagina_login');
Route::post('/entrar', 'AutenticacaoController@entrar')->name('realizar_login');
Route::get('/registrar', 'AutenticacaoController@create')->name('pagina_registro');
Route::post('/registrar', 'AutenticacaoController@store')->name('realizar_registro');
Route::get('/sair', 'AutenticacaoController@sair')->name('deslogar')->middleware('autenticador');