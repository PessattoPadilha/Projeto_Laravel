<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = new Produtos();
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos.edit', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index');
    }
}
