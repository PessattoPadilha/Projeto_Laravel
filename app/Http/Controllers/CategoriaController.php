<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
 
    public function index()
    {
        $categorias = Categoria::paginate(15);
        return view('categorias.index', compact('categorias'));
    }


    public function create(Request $request)
     {
        return view('categorias.create');
     }


 
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect()->route('categorias.index');
    }


    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }


    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $buttonText = 'Atualizar';
        return view('categorias.edit', compact('categoria', 'buttonText'));
    }

  
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect()->route('categorias.index');
    }

 
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}
