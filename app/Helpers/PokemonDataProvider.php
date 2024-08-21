<?php declare(strict_types=1);

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class PokemonDataProvider {
    private string $baseUrl = 'https://pokeapi.co/api/v2/';

    public function getPokemonList(int $limit = 20, int $offset = 0) : mixed
    {
        return Http::get("$this->baseUrl/pokemon?limit=$limit&offset=$offset")
            ->json();
    }

    public function getPokemon(int $id) : mixed
    {
        return Http::get("$this->baseUrl/pokemon/$id")
            ->json();
    }
}
