<?php

namespace App\Livewire;

use App\Helpers\PokemonDataProvider;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Arr;
use Livewire\Component;

class Home extends Component
{
    private PokemonDataProvider $dataProvider;
    public string $search = '';

    public function mount(PokemonDataProvider $pokemonDataProvider): void
    {
        $this->dataProvider = $pokemonDataProvider;
    }

    private function getPokemonItems(): array
    {
        $pokemonData = $this->dataProvider->getPokemonList();

        return Arr::where($pokemonData['results'], function($value) {
            return $this->search == '' ||
                str_contains($value['name'], strtolower($this->search));
        });
    }

    public function render(): View|Factory|Application
    {
        $pokemonItems = $this->getPokemonItems();
        return view('livewire.home', compact('pokemonItems'));
    }
}
