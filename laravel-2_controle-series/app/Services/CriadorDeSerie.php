<?php

namespace App\Services;

use App\Serie;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie
{

    public function criarSerie(string $nomeSerie, int $qtdTemporadas, int $epPorTemporada)
    {
//        $serie = null;
//        DB::transaction(function () use ($nomeSerie, $qtdTemporadas, $epPorTemporada, &$serie) {
//            $serie = Serie::create(['nome' => $nomeSerie]);
//            $this->criarTemporadas($qtdTemporadas, $epPorTemporada, $serie);
//        });
//        return $serie;

        DB::beginTransaction();
        $serie = Serie::create(['nome' => $nomeSerie]);
        $this->criarTemporadas($qtdTemporadas, $epPorTemporada, $serie);
        DB::commit();
        return $serie;
    }

    /**
     * @param int $qtdTemporadas
     * @param $serie
     * @param int $epPorTemporada
     * @return void
     */
    public function criarTemporadas(int $qtdTemporadas, int $epPorTemporada, $serie): void
    {
        for ($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            $this->criarEpisodios($epPorTemporada, $temporada);
        }
    }

    /**
     * @param int $epPorTemporada
     * @param $temporada
     * @return void
     */
    public function criarEpisodios(int $epPorTemporada, $temporada): void
    {
        for ($j = 1; $j <= $epPorTemporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
