<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Neerslag;

class NeerslagController extends Controller
{
    public function create()
    {
        return view('neerslag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jaar' => 'required|integer|min:2005|max:2024',
            'maand' => 'required|string',
            'mm' => 'required|numeric|min:0'
        ]);

        Neerslag::create([
            'jaar' => $request->jaar,
            'maand' => $request->maand,
            'mm' => $request->mm
        ]);

        return redirect('/admin/neerslag')->with('success', 'Neerslag toegevoegd!');
    }
}

