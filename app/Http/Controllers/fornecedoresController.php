<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fornecedores;

class FornecedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fornecedores = fornecedores::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fornecedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fornecedores = new Fornecedores();
        $fornecedores->nome = $request->input('nome');
        $fornecedores->cnpj = $request->input('cnpj');
        $fornecedores->contato = $request->input('contato');
        $fornecedores->save();

        return redirect()->route('fornecedores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        return view('fornecedores.show', compact('fornecedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        return view('fornecedores.edit', compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        $fornecedor->nome = $request->input('nome');
        $fornecedor->cnpj = $request->input('cnpj');
        $fornecedor->contato = $request->input('contato');
        $fornecedor->save();

        return redirect()->route('fornecedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores.index');
    }
}
