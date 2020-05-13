<?php

namespace App\Service;

use App\Serie;
use App\Temporada;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie
{
    public function criarSerie(string $nomeSerie, int $qtdTemporadas, int $epPorTemporada): Serie
    {
        $serie = null;
        DB::beginTransaction();

        $serie = Serie::create(['nome' => $nomeSerie]);
        $this->criarTemporadas($serie, $qtdTemporadas, $epPorTemporada);

        DB::commit();

        return $serie;
    }

    private function criarTemporadas(Serie $serie, int $qtdTemporadas, int $epPorTemporada): void
    {
        for ($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criarEpisodios($temporada, $epPorTemporada);
        }
    }

    private function criarEpisodios(Temporada $temporada, int $epPorTemporada): void
    {
        for ($j=1; $j <= $epPorTemporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
