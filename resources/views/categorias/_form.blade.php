<form action="{{ isset($categoria) ? route('categorias.update', $categoria->id) : route('categorias.store') }}" method="POST">
    @csrf
    @if(isset($categoria))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="nome">Nome da Categoria</label>
        <input type="text" class="form-control @error('nome') is-invalid @enderror" 
               id="nome" name="nome" value="{{ old('nome', $categoria->nome ?? '') }}" 
               placeholder="Digite o nome da categoria" required>
        @error('nome')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control @error('descricao') is-invalid @enderror" 
                  id="descricao" name="descricao" rows="4" 
                  placeholder="Digite a descrição">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>
        @error('descricao')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ isset($categoria) ? 'Atualizar' : 'Criar' }}
        </button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</form>