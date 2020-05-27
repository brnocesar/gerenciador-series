<?php 

Route::get('/', 'SeriesController@index')->name('listar_series');
Route::get('/criar', 'SeriesController@create')->name('adicionar_serie')->middleware('autenticador');
Route::post('/criar', 'SeriesController@store')->name('registra_serie')->middleware('autenticador');
Route::get('/novo-criar', 'SeriesController@newCreate')->name('serie.page.create')->middleware('autenticador');
Route::post('/novo-criar', 'SeriesController@newStore')->name('serie.action.store')->middleware('autenticador');
Route::delete('/{id}', 'SeriesController@destroy')->name('deleta_serie')->middleware('autenticador');
Route::post('/{id}/editar-nome', 'SeriesController@editarNome')->middleware('autenticador');