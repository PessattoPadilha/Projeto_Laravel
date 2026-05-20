@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Marcas</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('marcas.create') }}" class="btn btn-primary">
                + Nova Marca
            </a>
        </div>
    </div>

    @if ($marcas->isEmpty())
        <div class="alert alert-info">
            Nenhuma marca cadastrada.
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                <tr>
                    <td>{{ $marca->id }}</td>
                    <td>{{ $marca->nome }}</td>
                    <td>
                        <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST" style="display:inline;">
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