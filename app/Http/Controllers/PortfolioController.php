<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the portfolio.
     */
    public function index()
    {
        $portfolios = Portfolio::with(['techStacks', 'images'])->latest()->get();
        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Display the specified portfolio item.
     */
    public function show(Portfolio $portfolio)
    {
        $portfolio->load(['techStacks', 'images']);
        return view('portfolio.show', compact('portfolio'));
    }
}
