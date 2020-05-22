<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessages;
use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use App\Service\CriadorDeSerie;
use App\Service\RemovedorDeSerie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    use FlashMessages;

    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $flashMessage = $this->getMessages();

        return view('series.index', compact('series', 'flashMessage'));
    }

    public function create(Request $request)
    {
        $flashMessage = $this->getMessages();

        return view('series.create', compact('flashMessage'));
    }

    public function store(SeriesFormRequest $request, CriadorDeSerie $criadorDeSerie)
    {
        $serie = $criadorDeSerie->criarSerie($request->nome, $request->qtd_temporadas, $request->ep_por_temporada);

        $this->flashMessage([trans('messages.series.serie_created')]);

        return redirect()->route('listar_series');
    }

    public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie)
    {
        $nomeSerie = $removedorDeSerie->removerSerie($request->id);

        $this->flashMessage([trans('messages.series.serie_removed')]);

        return redirect()->route('listar_series');
    }


    public function newCreate(Request $request)
    {
        $flashMessage = $this->getMessages();

        return view('series.new-create', compact('flashMessage'));
    }

    public function newStore(Request $request){
        dd($request->all());
    }
}
