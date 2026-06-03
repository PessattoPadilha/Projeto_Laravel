<div class="mb-3">
    <label for="nome" class="form-label text-white">Nome do Produto</label>
    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome', $produto->nome ?? '') }}" required>
    @error('nome')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="preco" class="form-label text-white">Preço</label>
        <input type="number" step="0.01" class="form-control @error('preco') is-invalid @enderror" id="preco" name="preco" value="{{ old('preco', $produto->preco ?? '') }}" required>
        @error('preco')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="estoque" class="form-label text-white">Estoque</label>
        <input type="number" class="form-control @error('estoque') is-invalid @enderror" id="estoque" name="estoque" value="{{ old('estoque', $produto->estoque ?? '') }}" required>
        @error('estoque')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label for="descricao" class="form-label text-white">Descrição</label>
    <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" rows="4">{{ old('descricao', $produto->descricao ?? '') }}</textarea>
    @error('descricao')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <label for="marca_id" class="form-label text-white">Marca</label>
        <select class="form-select @error('marca_id') is-invalid @enderror" id="marca_id" name="marca_id" required>
            <option value="">Selecione a marca</option>
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}" {{ old('marca_id', optional($produto)->id_marcas ?? '') == $marca->id ? 'selected' : '' }}>{{ $marca->nome }}</option>
            @endforeach
        </select>
        @error('marca_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 mb-3">
        <label for="fornecedor_id" class="form-label text-white">Fornecedor</label>
        <select class="form-select @error('fornecedor_id') is-invalid @enderror" id="fornecedor_id" name="fornecedor_id" required>
            <option value="">Selecione o fornecedor</option>
            @foreach($fornecedores as $fornecedor)
                <option value="{{ $fornecedor->id }}" {{ old('fornecedor_id', optional($produto)->id_fornecedores ?? '') == $fornecedor->id ? 'selected' : '' }}>{{ $fornecedor->nome }}</option>
            @endforeach
        </select>
        @error('fornecedor_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 mb-3">
        <label for="categoria_id" class="form-label text-white">Categoria</label>
        <select class="form-select @error('categoria_id') is-invalid @enderror" id="categoria_id" name="categoria_id" required>
            <option value="">Selecione a categoria</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ old('categoria_id', optional($produto)->id_categorias ?? '') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nome }}</option>
            @endforeach
        </select>
        @error('categoria_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
