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
        cd nome projeto

    2. Instale dependências PHP e JS:
        composer install
        npm install

    3. Configure o arquivo de ambiente:
        php artisan key:generate

    4. Ajuste credenciais do banco em `.env` e rode migrações:

        php artisan migrate
        php artisan db:seed

    5. Compile assets:

        npm run build    # produção
        npm run dev      # desenvolvimento

    6. Inicie o servidor local:

        php artisan serve


 Uso
    - Acesse `http://localhost:8000` (ou a porta exibida).
    - Painel administrativo: `/dashboard` (ajuste conforme rotas).



Estrutura do repositório (resumo)
    - `app/` — código Laravel (Models, Controllers, Livewire)
    - `database/migrations` — migrações
    - `resources/views` — views Blade
    - `public/` — assets compilados
    - `tests/` — testes automatizados



Contato
Rafael de oliveira klein (https://github.com/Rafaelklein20)
Gustavo pessatto padilha (https://github.com/PessattoPadilha)

