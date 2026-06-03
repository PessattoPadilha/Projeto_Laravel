@extends('layouts.app')

@section('title', 'Editar Alunos')

@section('content')
    <h1>Editar categorias</h1>

    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @method('PUT')
        @include('categorias.forms', ['buttonText' => 'Salvar alteracoes'])
    </form>
@endsection
