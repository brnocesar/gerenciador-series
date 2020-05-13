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

Route::get('/', function (){
    return redirect()->route('listar_series');
});

Route::get('/series', 'SeriesController@index')->name('listar_series');
Route::get('/series/criar', 'SeriesController@create')->name('adicionar_serie')->middleware('autenticador');
Route::post('/series/criar', 'SeriesController@store')->name('registra_serie')->middleware('autenticador');
Route::delete('/series/{id}', 'SeriesController@destroy')->name('deleta_serie')->middleware('autenticador');
Route::post('/series/{id}/editar-nome', 'SeriesController@editarNome')->middleware('autenticador');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index')->name('listar_temporadas');
Route::get('temporadas/{temporada}/episodios', 'EpisodiosController@index')->name('listar_episodios');
Route::post('temporadas/{temporada}/episodios/assitir', 'EpisodiosController@assistir')->name('assistir_episodios')->middleware('autenticador');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'AutenticacaoController@index')->name('pagina_login');
Route::post('/entrar', 'AutenticacaoController@entrar')->name('realizar_login');
Route::get('/registrar', 'AutenticacaoController@create')->name('pagina_registro');
Route::post('/registrar', 'AutenticacaoController@store')->name('realizar_registro');
Route::get('/sair', 'AutenticacaoController@sair')->name('deslogar');
