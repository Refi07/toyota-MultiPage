<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudangs = Gudang::all();
        return view('gudangs.index', compact('gudangs'));
    }

    public function create()
    {
        if (auth()->user()->email !== 'refi3075@gmail.com') { abort(403); }
        return view('gudangs.create');
    }

    public function store(Request $request)
    {
        if (auth()->user()->email !== 'refi3075@gmail.com') { abort(403); }

        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Gudang::create($request->all());

        return redirect()->route('gudangs.index')->with('success', 'Gudang berhasil ditambahkan!');
    }
}