<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'GeekStore Admin') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-principal: #121214;       /* Preto profundo para o fundo */
            --bg-card: #1a1a1e;            /* Preto ligeiramente mais claro para contraste */
            --amarelo-geek: #FFD43B;       /* Amarelo vibrante geek */
            --amarelo-hover: #E3BC28;      /* Amarelo para estados de hover */
            --texto-claro: #F8F9FA;        /* Branco off-white para não agredir os olhos */
            --texto-mutado: #ADB5BD;       /* Cinza para textos secundários */
            --borda-suave: #2A2A30;        /* Linhas divisórias sutis */
        }

        body {
            background-color: var(--bg-principal);
            color: var(--texto-claro);
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Customizada */
        .navbar-geek {
            background-color: var(--bg-card);
            border-bottom: 2px solid var(--amarelo-geek);
        }
        .navbar-brand {
            color: var(--amarelo-geek) !important;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .nav-link {
            color: var(--texto-mutado) !important;
            transition: color 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--amarelo-geek) !important;
        }

        /* Main Content wrapper */
        main {
            flex: 1;
        }

        /* Botões customizados seguindo a identidade visual */
        .btn-geek {
            background-color: var(--amarelo-geek);
            color: #000000;
            font-weight: 600;
            border: none;
            transition: all 0.2s ease;
        }
        .btn-geek:hover {
            background-color: var(--amarelo-hover);
            color: #000000;
            transform: translateY(-1px);
        }

        /* Estilização para as tabelas e elementos do seu index.blade */
        .table {
            color: var(--texto-claro) !important;
            background-color: var(--bg-card);
        }
        .table-dark {
            --bs-table-bg: #0b0b0c;
            color: var(--amarelo-geek) !important;
        }
        .table-striped tbody tr {
            background-color: #0b0b0c !important;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #0b0b0c !important;
            color: var(--texto-claro);
        }
        .table td, .table th {
            border-color: var(--borda-suave);
            vertical-align: middle;
        }

        /* Alertas Customizados */
        .alert-info {
            background-color: rgba(255, 212, 59, 0.1);
            border: 1px solid var(--amarelo-geek);
            color: var(--amarelo-geek);
        }

        /* Footer */
        footer {
            background-color: var(--bg-card);
            border-top: 1px solid var(--borda-suave);
            color: var(--texto-mutado);
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-geek navbar-dark shadow">
            <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-gamepad me-2"></i>GEEK<span class="text-white">STORE</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('fornecedores') ? 'active' : '' }}" href="{{ route('fornecedores.index') }}"><i class="fa-solid fa-truck-field me-1"></i> Fornecedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('marcas') ? 'active' : '' }}" href="{{ route('marcas.index') }}"><i class="fa-solid fa-rectangle-list me-1"></i> Marcas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categorias') ? 'active' : '' }}" href="{{ route('categorias.index') }}"><i class="fa-solid fa-tags me-1"></i> Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('produtos') ? 'active' : '' }}" href="{{ route('produtos.index') }}"><i class="fa-solid fa-boxes-stacked me-1"></i> Produtos</a>
                </li>
                </ul>  
            </div>
            </div>
        </nav>

        <style>
            .nav-link.active::after {
            content: '';
            display: block;
            height: 2px;
            background-color: var(--amarelo-geek);
            margin-top: 5px; /* Ajuste a distância conforme necessário */
            transition: width 0.3s;
            width: 100%;
            }
        </style>
    </header>

    <main class="py-5">
        @yield('content')
    </main>

    <footer class="text-center text-md-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <span>&copy; {{ date('Y') }} GeekStore Dashboard. Todos os direitos reservados.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small>Desenvolvido  <i class="fa-solid fa-gamepad text-danger"></i> para o próximo nível.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>