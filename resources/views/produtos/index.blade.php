@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h2 text-white font-weight-bold">
                <i class="fa-solid fa-box-open text-warning me-2"></i>Produtos
            </h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm me-2">
                <i class="fa-solid fa-arrow-left me-1"></i>Voltar ao Dashboard
            </a>
            <a href="{{ route('produtos.create') }}" class="btn btn-geek btn-sm">
                <i class="fa-solid fa-plus me-1"></i>Novo Produto
            </a>
        </div>
    </div>

    @if ($produtos->isEmpty())
        <div class="alert alert-info">
            Nenhum produto cadastrado.
        </div>
    @else
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Fornecedor</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ optional($produto->marca)->nome ?? 'Marca Exemplo' }}</td>
                    <td>{{ optional($produto->fornecedor)->nome ?? 'Fornecedor Exemplo' }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection