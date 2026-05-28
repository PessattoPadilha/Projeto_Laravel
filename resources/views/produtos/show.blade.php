@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h1 class="h2 text-white font-weight-bold">
                <i class="fa-solid fa-circle-info text-warning me-2"></i>Detalhes do Produto
            </h1>
            <p class="text-muted small mb-0">Visualize as informações completas de <strong>{{ $produto->nome }}</strong>.</p>
        </div>
        <div class="col-md-6 text-md-end text-start mt-3 mt-md-0">
            <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary btn-sm text-white">
                <i class="fa-solid fa-arrow-left me-1"></i> Voltar para a Lista
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10">
            <div class="card shadow-lg border-0" style="background-color: var(--bg-card); border-top: 3px solid var(--amarelo-geek) !important;">
                <div class="card-body p-4 p-md-5">
                    
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">ID</label>
                                <p class="form-control-plaintext text-white fs-6">{{ $produto->id }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Nome</label>
                                <p class="form-control-plaintext text-white fs-6">{{ $produto->nome }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Marca</label>
                                <p class="form-control-plaintext text-white fs-6">{{ optional($produto->marca)->nome ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Fornecedor</label>
                                <p class="form-control-plaintext text-white fs-6">{{ optional($produto->fornecedor)->nome ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Categoria</label>
                                <p class="form-control-plaintext text-white fs-6">{{ optional($produto->categoria)->nome ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Preço</label>
                                <p class="form-control-plaintext text-white fs-6">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Estoque</label>
                                <p class="form-control-plaintext text-white fs-6">{{ $produto->estoque }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Descrição</label>
                                <p class="form-control-plaintext text-white fs-6">{{ $produto->descricao ?? 'Sem descrição' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label text-white-50 text-uppercase small fw-bold">Data de Criação</label>
                                <p class="form-control-plaintext text-white fs-6">{{ $produto->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    <hr class="border-secondary my-4">

                    <div class="text-end">
                        <a href="{{ route('produtos.index') }}" class="btn btn-link text-white-50 text-decoration-none me-3">
                            <i class="fa-solid fa-times me-1"></i>Fechar
                        </a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-geek px-4 py-2">
                            <i class="fa-solid fa-pen-to-square me-2"></i>Editar
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
