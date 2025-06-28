<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        return view('admin.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'current' => 'boolean',
        ]);

        Experience::create([
            'title' => $request->title,
            'company' => $request->company,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->current ? null : $request->end_date,
            'current' => $request->current ?? false,
        ]);

        return redirect()->route('admin.experience.index')->with('success', 'Experience berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'current' => 'boolean',
        ]);

        $experience = Experience::findOrFail($id);
        $experience->update([
            'title' => $request->title,
            'company' => $request->company,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->current ? null : $request->end_date,
            'current' => $request->current ?? false,
        ]);

        return redirect()->route('admin.experience.index')->with('success', 'Experience berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect()->route('admin.experience.index')->with('success', 'Experience berhasil dihapus!');
    }
}
