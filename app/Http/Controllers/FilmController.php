<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of films - EXERCISE VERSION
     * Ini adalah versi yang BELUM responsive, untuk latihan mahasiswa
     * Task: Convert static layout jadi mobile-first responsive
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new film
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created film in storage
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_year' => 'nullable|integer|min:1900|max:' . (date('Y') + 5),
            'genre' => 'nullable|string|max:100',
            'duration' => 'nullable|integer|min:1',
        ]);

        $validated['added_by'] = 'Student'; // Default untuk learning purpose

        Film::create($validated);

        return redirect()->route('films.index')->with('success', 'Film berhasil ditambahkan!');
    }
}
