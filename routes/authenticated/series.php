<?php 

Route::get('/criar', 'SeriesController@create')->name('adicionar_serie');
Route::post('/criar', 'SeriesController@store')->name('registra_serie');
Route::get('/novo-criar', 'SeriesController@newCreate')->name('serie.page.create');
Route::post('/novo-criar', 'SeriesController@newStore')->name('serie.action.store');
Route::delete('/{id}', 'SeriesController@destroy')->name('deleta_serie');
Route::post('/{id}/editar-nome', 'SeriesController@editarNome');