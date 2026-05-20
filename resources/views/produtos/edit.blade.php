@extends('layouts.app')

@section('title', 'Editar Alunos')

@section('content')
    <h1>Editar produtos</h1>

    <form action="{{ route('produtos.update', $produto) }}" method="POST">
        @method('PUT')
        @include('produtos._forms', ['buttonText' => 'Salvar alteracoes'])
    </form>
@endsection
