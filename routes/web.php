<?php

use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $portfolios = Portfolio::with(['techStacks', 'images'])->latest()->get();
    return view('welcome', compact('portfolios'));
});

Route::get('/portfolio', function () {
    $portfolios = Portfolio::with(['techStacks', 'images'])->latest()->get();
    return view('portfolio', compact('portfolios'));
});
