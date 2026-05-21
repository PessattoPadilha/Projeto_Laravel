<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fornecedor;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedor.index', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fornecedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->input('nome');
        $fornecedor->cnpj = $request->input('cnpj');
        $fornecedor->contato = $request->input('contato');
        $fornecedor->save();

        return redirect()->route('fornecedor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedor.edit', compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->nome = $request->input('nome');
        $fornecedor->cnpj = $request->input('cnpj');
        $fornecedor->contato = $request->input('contato');
        $fornecedor->save();

        return redirect()->route('fornecedor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedor.index');
    }
}
