<?php

namespace App\Http\Controllers;

use App\Models\marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = marcas::all();
        return view('marcas.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $marca = new marcas();
        $marca->nome = $request->input('nome');
        $marca->Origem = $request->input('Origem');
        $marca->save();

        return redirect()->route('marcas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $marca = marcas::findOrFail($id);
        return view('marcas.edit', compact('marca'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $marca = marcas::findOrFail($id);
        $marca->nome = $request->input('nome');
        $marca->Origem = $request->input('Origem');
        $marca->save();

        return redirect()->route('marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marca = marcas::findOrFail($id);
        $marca->delete();

        return redirect()->route('marcas.index');
    }
}
