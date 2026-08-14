<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index(Request $request)
    {
        $query = Division::query()
            ->orderBy('nama_divisi', 'asc');

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('kode_divisi', 'like', "%{$search}%")
                    ->orWhere('nama_divisi', 'like', "%{$search}%");
            });
        }

        $divisions = $query
            ->paginate(10)
            ->withQueryString();

        return view('divisions.index', compact('divisions'));
        
    }

    public function create()
    {
        return view('divisions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_divisi' => 'required|unique:divisions,kode_divisi',
            'nama_divisi' => 'required',
        ]);

        Division::create($validatedData);

        return redirect()->route('divisions.index')->with('success', 'Divisi berhasil ditambahkan.');
    }

    public function edit(Division $division)
    {
        return view('divisions.edit', compact('division'));
    }

    public function update(Request $request, Division $division)
    {
        $validatedData = $request->validate([
            'kode_divisi' => 'required|unique:divisions,kode_divisi,' . $division->id,
            'nama_divisi' => 'required',
        ]);

        $division->update($validatedData);

        return redirect()->route('divisions.index')->with('success', 'Divisi berhasil diperbarui.');
    }

    public function destroy(Division $division)
    {
        $division->delete();

        return redirect()->route('divisions.index')->with('success', 'Divisi berhasil dihapus.');
    }
}