<?php

namespace App\Livewire;

use App\Helpers\PokemonDataProvider;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Pokemon extends Component
{
    private int $id;
    private PokemonDataProvider $dataProvider;
    private mixed $pokemonData;

    public function mount(int $id, PokemonDataProvider $pokemonDataProvider): void
    {
        $this->id = $id;
        $this->dataProvider = $pokemonDataProvider;
    }

    public function render(): View|Factory|Application
    {
        $this->pokemonData = $this->dataProvider->getPokemon($this->id);
        return view('livewire.pokemon');
    }
}
