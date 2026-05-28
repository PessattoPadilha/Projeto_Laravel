<div class="row g-4">
    <div class="col-md-12">
        <label for="nome" class="form-label text-warning fw-bold small text-uppercase">
            <i class="fa-solid fa-tag me-1"></i> Nome da Marca
        </label>
        <input type="text" 
               class="form-control bg-dark text-white border-0 py-2.5 px-3" 
               id="nome" 
               name="nome" 
               placeholder="Ex: Samsung" 
               value="{{ old('nome', isset($marca) ? $marca->nome : '') }}" 
               required 
               style="border-radius: 6px; box-shadow: none;">
    </div>

    <div class="col-md-12">
        <label for="Origem" class="form-label text-warning fw-bold small text-uppercase">
            <i class="fa-solid fa-globe me-1"></i> Origem
        </label>
        <input type="text" 
               class="form-control bg-dark text-white border-0 py-2.5 px-3" 
               id="Origem" 
               name="Origem" 
               placeholder="Ex: Brasil, EUA, Japão" 
               value="{{ old('Origem', isset($marca) ? $marca->Origem : '') }}" 
               style="border-radius: 6px; box-shadow: none;">
    </div>

    <div class="col-12 my-4">
        <hr style="border-color: var(--borda-suave); margin: 0;">
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