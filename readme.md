Projeto Loja Geek
Projeto para a faculdade que simula um crud de gerenciamento de estoque de uma loja para produtos geek/gamer
dividido em 4 cruds principais 
  categorias
  marcas
  fornecedores
  produtos - crud principal com chaves estrangeiras que puxa dados dos outros

Status: Em desenvolvimento

 Tecnologias
    - PHP (Laravel)
    - MySQL 
    - Composer, NPM

 Requisitos
    - PHP >= 8.x
    - Composer
    - Node.js >= 16
    - MySQL ou outro banco compatível
    
 Instalação
    1. Clone o repositório:
    git clone <https://github.com/PessattoPadilha/Projeto_Laravel.git>
    cd projeto
```
2. Instale dependências PHP e JS:
```bash
composer install
npm install
```
3. Configure o arquivo de ambiente:
```bash
cp .env.example .env
php artisan key:generate
```
4. Ajuste credenciais do banco em `.env` e rode migrações:
```bash
php artisan migrate
php artisan db:seed
```
5. Compile assets:
```bash
npm run build    # produção
npm run dev      # desenvolvimento
```
6. Inicie o servidor local:
```bash
php artisan serve
```

## Uso
- Acesse `http://localhost:8000` (ou a porta exibida).
- Painel administrativo: `/dashboard` (ajuste conforme rotas).

## Testes
- Executar testes:
```bash
php artisan test
# ou, se usar Pest
./vendor/bin/pest
```

## Contribuição
- Abra uma issue antes de iniciar grandes alterações.
- Faça fork, crie uma branch com nome claro (`feature/nome`), faça commits pequenos e envie PR.

## Estrutura do repositório (resumo)
- `app/` — código Laravel (Models, Controllers, Livewire)
- `database/migrations` — migrações
- `resources/views` — views Blade
- `public/` — assets compilados
- `tests/` — testes automatizados

## Dicas
- Para desenvolvimento rápido, use `npm run dev` e `php artisan migrate --seed`.
- Verifique `config/app.php` e providers (ex: `App\Providers\VoltServiceProvider`) ao alterar bindings.

## Licença
Especifique a licença do projeto (ex: MIT).

## Contato
Nome — email ou link para perfil (GitHub/LinkedIn).

