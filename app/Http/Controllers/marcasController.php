<?php

namespace App\Http\Controllers;

use App\Models\marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{

    public function index()
    {
        $marcas = marcas::all();
        return view('marcas.index', compact('marcas'));
    }


    public function create()
    {
        return view('marcas.create');
    }


    public function store(Request $request)
    {
        $marca = new marcas();
        $marca->nome = $request->input('nome');
        $marca->Origem = $request->input('Origem');
        $marca->save();

        return redirect()->route('marcas.index');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $marca = marcas::findOrFail($id);
        return view('marcas.edit', compact('marca'));

    }


    public function update(Request $request, string $id)
    {
        $marca = marcas::findOrFail($id);
        $marca->nome = $request->input('nome');
        $marca->Origem = $request->input('Origem');
        $marca->save();

        return redirect()->route('marcas.index');
    }


    public function destroy(string $id)
    {
        $marca = marcas::findOrFail($id);
        $marca->delete();

        return redirect()->route('marcas.index');
    }
}
