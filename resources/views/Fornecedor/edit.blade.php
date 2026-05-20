@extends('layouts.app')

@section('title', 'Editar Alunos')

@section('content')
    <h1>Editar fornecedores</h1>

    <form action="{{ route('fornecedores.update', $fornecedor) }}" method="POST">
        @method('PUT')
        @include('fornecedores._forms', ['buttonText' => 'Salvar alteracoes'])
    </form>
@endsection
