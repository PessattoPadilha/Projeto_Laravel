<div class="mb-4">
    <label for="nome" class="form-label text-white font-weight-bold">Nome da Categoria</label>
    <input type="text" class="form-control bg-dark text-white border-secondary @error('nome') is-invalid @enderror" 
           id="nome" name="nome" value="{{ old('nome', $categoria->nome ?? '') }}" 
           placeholder="Ex: Camisetas, Action Figures, Jogos..." required>
    @error('nome')
        <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
    @enderror
</div>

<div class="mb-4">
    <label for="descricao" class="form-label text-white font-weight-bold">Descrição</label>
    <textarea class="form-control bg-dark text-white border-secondary @error('descricao') is-invalid @enderror" 
              id="descricao" name="descricao" rows="4" 
              placeholder="Descreva brevemente o que esta categoria abrange...">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>
    @error('descricao')
        <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
    @enderror
</div>
