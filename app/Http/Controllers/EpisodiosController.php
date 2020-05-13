<?php

namespace App\Http\Controllers;

use App\Episodio;
use App\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request)
    {
        $mensagem = $request->session()->get('mensagem');

        return view('episodios.index', compact('temporada', 'mensagem'));
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
            $request->session()->flash('mensagem', 'Episódios marcados como assistidos');
        }

        return redirect()->back();
    }
}
