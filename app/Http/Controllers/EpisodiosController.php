<?php

namespace App\Http\Controllers;

use App\Episodio;
use App\Helpers\FlashMessages;
use App\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    use FlashMessages; 
    public function index(Temporada $temporada, Request $request)
    {
        $mensagem = $request->session()->get('mensagem');
        $flashMessage = $this->getMessages();

        return view('episodios.index', compact('temporada', 'flashMessage'));
    }

    public function assistir(Temporada $temporada, Request $request)
    {
        // dd($request->all());
        $episodiosAssistidos = $request->episodios;

        $temporada->episodios->each(function (Episodio $episodio) use ($episodiosAssistidos) {

            $episodio->assistido = in_array($episodio->id, $episodiosAssistidos ?? []);
        });
        $temporada->push();

        if ( $request->has('episodios') ) {
            $this->flashMessage([trans('messages.episodes.watched_list_updated')]);
        }

        return redirect()->back();
    }
}
