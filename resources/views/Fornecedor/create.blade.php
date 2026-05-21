@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h1 class="h2 text-white font-weight-bold">
                <i class="fa-solid fa-plus text-warning me-2"></i>Novo Fornecedor
            </h1>
            <p class="text-muted small mb-0">Cadastre um novo parceiro ou distribuidor para a sua loja.</p>
        </div>
        <div class="col-md-6 text-md-end text-start mt-3 mt-md-0">
            <a href="{{ route('fornecedor.index') }}" class="btn btn-outline-secondary btn-sm text-white">
                <i class="fa-solid fa-arrow-left me-1"></i> Voltar para a Lista
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10">
            <div class="card shadow-lg border-0" style="background-color: var(--bg-card); border-top: 3px solid var(--amarelo-geek) !important;">
                <div class="card-body p-4 p-md-5">
                    
                    <form action="{{ route('fornecedor.store') }}" method="POST">
                        @csrf

                        <div class="row g-4">
                            <div class="col-md-12">
                                <label for="nome" class="form-label text-warning fw-bold small text-uppercase">
                                    <i class="fa-solid fa-building me-1"></i> Nome / Razão Social
                                </label>
                                <input type="text" 
                                       class="form-control bg-dark text-white border-0 py-2.5 px-3" 
                                       id="nome" 
                                       name="nome" 
                                       placeholder="Ex: Distribuidora Geek de Informática LTDA" 
                                       required 
                                       style="border-radius: 6px; box-shadow: none;">
                            </div>

                            <div class="col-md-6">
                                <label for="cnpj" class="form-label text-warning fw-bold small text-uppercase">
                                    <i class="fa-solid fa-id-card me-1"></i> CNPJ
                                </label>
                                <input type="text" 
                                       class="form-control bg-dark text-white border-0 py-2.5 px-3" 
                                       id="cnpj" 
                                       name="cnpj" 
                                       placeholder="00.000.000/0001-00" 
                                       required 
                                       style="border-radius: 6px; box-shadow: none;">
                            </div>

                            <div class="col-md-6">
                                <label for="contato" class="form-label text-warning fw-bold small text-uppercase">
                                    <i class="fa-solid fa-envelope me-1"></i> Contato / E-mail
                                </label>
                                <input type="email" 
                                       class="form-control bg-dark text-white border-0 py-2.5 px-3" 
                                       id="contato" 
                                       name="contato" 
                                       placeholder="Ex: comercial@fornecedor.com" 
                                       required 
                                       style="border-radius: 6px; box-shadow: none;">
                            </div>

                            <div class="col-12 my-4">
                                <hr style="border-color: var(--borda-suave); margin: 0;">
                            </div>

                            <div class="col-12 text-end">
                                <a href="{{ route('fornecedor.index') }}" class="btn btn-link text-white-50 text-decoration-none me-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-geek px-4 py-2">
                                    <i class="fa-solid fa-floppy-disk me-2"></i>Salvar Fornecedor
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus {
        background-color: #0b0b0c !important;
        color: #ffffff !important;
        border: 1px solid var(--amarelo-geek) !important;
        box-shadow: 0 0 0 0.25rem rgba(255, 212, 59, 0.15) !important;
    }
    .form-control::placeholder {
        color: #6c757d !important;
        opacity: 1;
    }
</style>
@endsection