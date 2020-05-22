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
        $flashMessage = $this->getMessages();

        return view('episodios.index', compact('temporada', 'flashMessage'));
    }


    public function watchEpisode(int $episode_id)
    {
        if ( !($episode = Episodio::find($episode_id)) ) {
            return $this->notFound('episodes');
        }

        $episode->update(['assistido' => true]);

        $this->flashMessage([trans('messages.episodes.watched_episode')]);

        return redirect()->back();
    }
}
