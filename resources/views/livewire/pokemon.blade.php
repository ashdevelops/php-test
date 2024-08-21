@extends('components.layouts.app')
@section('content')
    <div>
        <a href="/" class="block p-2 bg-blue-500 text-white">Back</a>
        <?php dump($this->pokemonData) ?>
    </div>
@stop


