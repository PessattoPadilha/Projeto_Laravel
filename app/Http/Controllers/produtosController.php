<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\categoria;
use App\Models\fornecedores;
use App\Models\marcas;

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
        $marcas = marcas::orderBy('nome')->get();
        $fornecedores = fornecedores::orderBy('nome')->get();
        $categorias = categoria::orderBy('nome')->get();

        return view('produtos.create', compact('marcas', 'fornecedores', 'categorias'))->with('produto', null);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
            'descricao' => 'nullable|string',
            'marca_id' => 'required|integer',
            'fornecedor_id' => 'required|integer',
            'categoria_id' => 'required|integer',
        ]);

        $produto = new Produtos();
        $produto->nome = $data['nome'];
        $produto->preco = $data['preco'];
        $produto->estoque = $data['estoque'];
        $produto->descricao = $data['descricao'] ?? null;
        $produto->id_marcas = $data['marca_id'] ?? null;
        $produto->id_fornecedores = $data['fornecedor_id'] ?? null;
        $produto->id_categorias = $data['categoria_id'] ?? null;
        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produtos::findOrFail($id);
        $marcas = marcas::orderBy('nome')->get();
        $fornecedores = fornecedores::orderBy('nome')->get();
        $categorias = categoria::orderBy('nome')->get();
        return view('produtos.edit', compact('produto', 'marcas', 'fornecedores', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
            'descricao' => 'nullable|string',
            'marca_id' => 'required|integer',
            'fornecedor_id' => 'required|integer',
            'categoria_id' => 'required|integer',
        ]);

        $produto = Produtos::findOrFail($id);
        $produto->nome = $data['nome'];
        $produto->preco = $data['preco'];
        $produto->estoque = $data['estoque'];
        $produto->descricao = $data['descricao'] ?? null;
        $produto->id_marcas = $data['marca_id'] ?? null;
        $produto->id_fornecedores = $data['fornecedor_id'] ?? null;
        $produto->id_categorias = $data['categoria_id'] ?? null;
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
