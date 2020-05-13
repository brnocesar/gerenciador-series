<?php

namespace Tests\Unit;

use App\Service\CriadorDeSerie;
use App\Service\RemovedorDeSerie;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RemovedorDeSerieTest extends TestCase
{
    use RefreshDatabase;

    /** @var Serie */
    private $serie;

    protected function setUp(): void
    {
        parent::setUp();

        $criadorDeSerie = new CriadorDeSerie();
        $nomeSerie = 'A série da batatinha';
        $this->serie = $criadorDeSerie->criarSerie($nomeSerie, 1, 1);
    }

    public function testRemoverUmaSerie()
    {
        $this->assertDatabaseHas('series', ['id' => $this->serie->id]);         // 1

        $removedorDeSerie = new RemovedorDeSerie();                             // 2
        $nomeRetornado = $removedorDeSerie->removerSerie($this->serie->id);

        $this->assertIsString($nomeRetornado);                                  // 3
        $this->assertEquals('A série da batatinha', $this->serie->nome);        // 4
        $this->assertDatabaseMissing('series', ['id' => $this->serie->id]);     // 5
    }
}
