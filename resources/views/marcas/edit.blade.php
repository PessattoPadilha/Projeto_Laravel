@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h1 class="h2 text-white font-weight-bold">
                <i class="fa-solid fa-pen-to-square text-warning me-2"></i>Editar Marca
            </h1>
            <p class="text-muted small mb-0">Atualize as informações da marca <strong>{{ $marca->nome }}</strong>.</p>
        </div>
        <div class="col-md-6 text-md-end text-start mt-3 mt-md-0">
            <a href="{{ route('marcas.index') }}" class="btn btn-outline-secondary btn-sm text-white">
                <i class="fa-solid fa-arrow-left me-1"></i> Voltar para a Lista
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10">
            <div class="card shadow-lg border-0" style="background-color: var(--bg-card); border-top: 3px solid var(--amarelo-geek) !important;">
                <div class="card-body p-4 p-md-5">
                    
                    <form action="{{ route('marcas.update', $marca->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @include('marcas._form')
                        <div class="text-end">
                            <a href="{{ route('marcas.index') }}" class="btn btn-link text-white-50 text-decoration-none me-3">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-geek px-4 py-2">
                                <i class="fa-solid fa-rotate me-2"></i>Atualizar Marca
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection