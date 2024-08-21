<?php

use App\Livewire\Home;
use App\Livewire\Pokemon;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/pokemon/{id}', Pokemon::class)->name('pokemon');
