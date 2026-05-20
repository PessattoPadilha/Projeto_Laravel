@extends('layouts.app')

@section('title', 'Editar Alunos')

@section('content')
    <h1>Editar marcas</h1>

    <form action="{{ route('marcas.update', $marca) }}" method="POST">
        @method('PUT')
        @include('marcas._forms', ['buttonText' => 'Salvar alteracoes'])
    </form>
@endsection
