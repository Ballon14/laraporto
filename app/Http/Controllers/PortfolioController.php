<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('order')->get();
        $skills = Skill::orderBy('order')->get();
        $experiences = Experience::orderBy('order')->get();

        return view('portfolio.index', compact('portfolios', 'skills', 'experiences'));
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio.show', compact('portfolio'));
    }
}
