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
               value="{{ old('nome', $fornecedor->nome ?? '') }}" 
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
               value="{{ old('cnpj', $fornecedor->cnpj ?? '') }}" 
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
               value="{{ old('contato', $fornecedor->contato ?? '') }}" 
               required 
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