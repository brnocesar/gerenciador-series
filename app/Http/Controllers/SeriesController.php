<?php

namespace App\Http\Controllers;

use App\Episodio;
use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use App\Service\CriadorDeSerie;
use App\Service\RemovedorDeSerie;
use App\Temporada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create(Request $request)
    {
        $mensagem = $request->session()->get('mensagem');
        return view('series.create', compact('mensagem'));
    }

    public function store(SeriesFormRequest $request, CriadorDeSerie $criadorDeSerie)
    {
        $serie = $criadorDeSerie->criarSerie($request->nome, $request->qtd_temporadas, $request->ep_por_temporada);

        $request->session()->flash(
            'mensagem',
            "Série $serie->nome adicionada com sucesso! ($serie->id)"
        );

        return redirect()->route('listar_series');
    }

    public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie)
    {
        $nomeSerie = $removedorDeSerie->removerSerie($request->id);

        $request->session()->flash('mensagem', "Série $nomeSerie removida com sucesso!");

        return redirect()->route('listar_series');
    }

    public function editarNome(int $id, Request $request)
    {
        $serie = Serie::find($id);
        $serie->nome ??= $request->nome;
        $serie->save();
    }
}
