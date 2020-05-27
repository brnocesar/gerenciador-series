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

use App\User;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/secret-script/make-admin', function(){
//     if ( $admin = User::where([ ['email', '=', 'bruno@bruno.com'], ['admin', '=', false] ])->first() ) {
//         $admin->update(['admin' => true]);
//         echo "Admin encontrado!";
//     }
//     echo "Nada mais para ver aqui.";
//     die();
// }); // para heroku

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index')->name('listar_temporadas');
Route::get('temporadas/{temporada}/episodios', 'EpisodiosController@index')->name('listar_episodios');
Route::post('temporadas/{temporada}/episodios/assitir', 'EpisodiosController@assistir')->name('assistir_episodios')->middleware('autenticador');
Route::get('episodios/{episodio_id}/assitir', 'EpisodiosController@watchEpisode')->name('episode.action.watch')->middleware('autenticador');
