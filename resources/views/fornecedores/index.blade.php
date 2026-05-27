@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Fornecedores</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('fornecedores.create') }}" class="btn btn-primary">
                + Novo Fornecedor
            </a>
        </div>
    </div>

    @if($fornecedores->isEmpty())
        <div class="alert alert-info">
            Nenhum fornecedor cadastrado.
        </div>
    @else
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fornecedores as $fornecedor)
                <tr>
                    <td>{{ $fornecedor->id }}</td>
                    <td>{{ $fornecedor->nome }}</td>
                    <td>{{ $fornecedor->cnpj  }}</td>
                    <td>{{ $fornecedor->contato  }}</td>
                    <td>
                        <a href="{{ route('fornecedores.show', $fornecedor->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('fornecedor.destroy', $fornecedor->id) }}" method="POST" style="display:inline;">
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