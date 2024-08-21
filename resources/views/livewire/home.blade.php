@extends('components.layouts.app')
@section('content')
    <div>
        <input wire:model.live="search" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-6" placeholder="Type a pokemon name...">
        @foreach ($pokemonItems as $pokemon)
            <div>
                <a href="{{ route('pokemon', ['id' => basename($pokemon['url'])]) }}" class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">
                    {{ $pokemon['name'] }}
                </a>
            </div>
        @endforeach
    </div>
@endsection
