<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;

Route::get('/', function () {
    $portfolios = Portfolio::with(['techStacks', 'images'])->latest()->get();
    return view('welcome', compact('portfolios'));
});

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{portfolio:slug}', [PortfolioController::class, 'show'])->name('portfolio.show');
