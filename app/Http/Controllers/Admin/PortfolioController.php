<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('order', 'asc')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
            'technologies' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'featured' => 'boolean',
        ]);

        $technologies = $request->technologies ? array_map('trim', explode(',', $request->technologies)) : [];

        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'github_url' => $request->github_url,
            'live_url' => $request->live_url,
            'technologies' => $technologies,
            'category' => $request->category,
            'order' => $request->order ?? 0,
            'featured' => $request->featured ?? false,
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
            'technologies' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'featured' => 'boolean',
        ]);

        $technologies = $request->technologies ? array_map('trim', explode(',', $request->technologies)) : [];

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'github_url' => $request->github_url,
            'live_url' => $request->live_url,
            'technologies' => $technologies,
            'category' => $request->category,
            'order' => $request->order ?? 0,
            'featured' => $request->featured ?? false,
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil dihapus!');
    }
}
