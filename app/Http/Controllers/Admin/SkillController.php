<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('order', 'asc')->get();
        return view('admin.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:1|max:100',
            'category' => 'required|string|max:255',
            'order' => 'nullable|integer|min:0',
        ]);

        Skill::create([
            'name' => $request->name,
            'level' => $request->level,
            'category' => $request->category,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:1|max:100',
            'category' => 'required|string|max:255',
            'order' => 'nullable|integer|min:0',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update([
            'name' => $request->name,
            'level' => $request->level,
            'category' => $request->category,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil dihapus!');
    }
}
