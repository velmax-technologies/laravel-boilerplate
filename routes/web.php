<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Livewire\Pages\HomePage::class)->name('home');