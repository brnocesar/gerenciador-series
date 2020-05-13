<?php

namespace Tests\Unit;

use App\Serie;
use App\Service\CriadorDeSerie;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CriadorDeSerieTest extends TestCase
{
    use RefreshDatabase;

    public function testCriarSerie()
    {
        $criadorDeSerie = new CriadorDeSerie();
        $nomeSerie = 'A série da batatinha';
        $serieCriada = $criadorDeSerie->criarSerie($nomeSerie, 1, 1);

        $this->assertInstanceOf(Serie::class, $serieCriada);                                        // 1
        $this->assertDatabaseHas('series', ['nome' => $nomeSerie]);                                 // 2
        $this->assertDatabaseHas('temporadas', ['serie_id' => $serieCriada->id, 'numero' => 1]);    // 3
        $this->assertDatabaseHas('episodios', ['numero' => 1]);                                     // 4
    }
}
