<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fornecedores;

class FornecedoresController extends Controller
{


    public function index()
    {
        $fornecedores = fornecedores::all();
        return view('fornecedores.index', compact('fornecedores'));
    }


    public function create()
    {
        return view('fornecedores.create');
    }


    public function store(Request $request)
    {
        $fornecedores = new Fornecedores();
        $fornecedores->nome = $request->input('nome');
        $fornecedores->cnpj = $request->input('cnpj');
        $fornecedores->contato = $request->input('contato');
        $fornecedores->save();

        return redirect()->route('fornecedores.index');
    }


    public function show(string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        return view('fornecedores.show', compact('fornecedor'));
    }


    public function edit(string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        return view('fornecedores.edit', compact('fornecedor'));
    }


    public function update(Request $request, string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        $fornecedor->nome = $request->input('nome');
        $fornecedor->cnpj = $request->input('cnpj');
        $fornecedor->contato = $request->input('contato');
        $fornecedor->save();

        return redirect()->route('fornecedores.index');
    }

  
    public function destroy(string $id)
    {
        $fornecedor = fornecedores::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores.index');
    }
}
