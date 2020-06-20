<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessages;
use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use App\Service\CriadorDeSerie;
use App\Service\RemovedorDeSerie;
use App\User;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    use FlashMessages;

    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->paginate(12);
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

        return redirect()->route('series.page.index');
    }

    public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie)
    {
        $nomeSerie = $removedorDeSerie->removerSerie($request->id);

        $this->flashMessage([trans('messages.series.serie_removed')]);

        return redirect()->route('series.page.index');
    }


    public function newCreate(Request $request)
    {
        $flashMessage = $this->getMessages();

        return view('series.new-create', compact('flashMessage'));
    }

    public function newStore(Request $request){
        dd($request->all());
    }

    public function addToUser(int $serie_id)
    {
        $serie = Serie::find($serie_id);
        if ( !$serie ) {
            return $this->notFound('series');
        }
        
        $user = User::find(auth()->user()->id);
        // dd('adiciona para usuario', $serie_id, $user->series->contains($serie_id));
        if ( $user->series->contains($serie_id) ) {
            $this->flashMessage([trans('messages.series.already_added')]);
            return redirect()->back();
        }

        $user->series()->attach($serie_id);
        $this->flashMessage([trans('messages.series.added')]);

        return redirect()->back();
    }


    public function mySeries()
    {
        return view('series.user-series', [
            'series'       => User::find(auth()->user()->id)->series,
            'flashMessage' => $this->getMessages()
        ]);
    }
}
