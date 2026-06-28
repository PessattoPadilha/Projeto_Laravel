<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? 'Laravel' }}</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LZ5e92s0PEIKx11D8chZ3QG3AsQiLDB+ShKfDrg4Hl2NvGiEXG34B13G01Rj0S1y" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-a2XI1vNqkzJYtGf0n2m3FQZ1Tsmhu5NSRr4K1B+ZT+Vw1gwm3xw7plfQUq6Rdvkk+1QjLxS+6iD5ntl3JYf6uHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance

<style>
    :root {
        /* Padrões para Modo Claro (Light Mode) */
        --bg-principal: #f8f9fa;
        --bg-card: #ffffff;
        --amarelo-geek: #e2b10c;
        --amarelo-hover: #c99c09;
        --texto-claro: #212529;
        --texto-mutado: #6c757d;
        --borda-suave: rgba(0, 0, 0, 0.08);
        --surface: #ffffff;
    }

    /* Padrões para Modo Escuro (Dark Mode) */
    .dark {
        --bg-principal: #090a0d;
        --bg-card: rgba(15, 15, 20, 0.96);
        --amarelo-geek: #FFD43B;
        --amarelo-hover: #F1C40F;
        --texto-claro: #F8F9FA;
        --texto-mutado: #A4A7B1;
        --borda-suave: rgba(255, 255, 255, 0.08);
        --surface: rgba(20, 20, 28, 0.92);
    }

    body {
        min-height: 100vh;
        background-color: var(--bg-principal);
        color: var(--texto-claro);
        font-family: 'Roboto', sans-serif;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .dark body {
        background: radial-gradient(circle at top left, rgba(255, 212, 59, 0.12), transparent 22%),
                    radial-gradient(circle at bottom right, rgba(255, 255, 255, 0.07), transparent 24%),
                    linear-gradient(180deg, #07080c 0%, #0d1016 100%);
    }

    main {
        padding: 2.5rem 1.25rem 3rem;
        min-height: calc(100vh - 4rem);
    }

    .container {
        max-width: 1240px;
        margin: 0 auto;
    }

    h1.h2,
    .page-title,
    .card-title {
        font-size: clamp(1.9rem, 2.4vw, 2.6rem);
        font-weight: 700;
        letter-spacing: -0.03em;
        color: #1e293b;
    }

    .dark h1.h2,
    .dark .page-title,
    .dark .card-title {
        color: #fdfdfd;
    }

    .page-subtitle,
    p.small,
    .text-muted {
        color: #64748b !important;
    }

    .dark .page-subtitle,
    .dark p.small,
    .dark .text-muted {
        color: rgba(248, 249, 250, 0.64) !important;
    }

    .page-header {
        margin-bottom: 1.75rem;
        padding: 1.75rem 1.9rem;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 1.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .dark .page-header {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 28px 80px rgba(0, 0, 0, 0.18);
        backdrop-filter: blur(18px);
    }

    .crud-card,
    .card {
        background: var(--surface);
        border: 1px solid var(--borda-suave);
        border-radius: 1.4rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .dark .crud-card,
    .dark .card {
        box-shadow: 0 26px 60px rgba(1, 1, 4, 0.28);
    }

    .crud-card .card-body,
    .card-body {
        padding: 1.9rem;
    }

    .table-responsive {
        border-radius: 1.25rem;
        overflow: hidden;
        box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.03);
    }

    .dark .table-responsive {
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.03);
    }

    .table {
        width: 100%;
        color: var(--texto-claro) !important;
        border-collapse: separate;
        border-spacing: 0 0.75rem;
        background: transparent;
    }

    .table thead tr {
        background: #e2e8f0;
    }

    .dark .table thead tr {
        background: rgba(70, 75, 92, 0.95);
    }

    .table th,
    .table td {
        border: none;
        padding: 1rem 1rem;
        vertical-align: middle;
        background: #ffffff;
        color: #1e293b;
    }

    .dark .table th,
    .dark .table td {
        background: rgba(35, 39, 50, 0.96);
        color: #e8e8ef;
    }

    .table tbody tr:nth-of-type(odd) {
        border-radius: 1rem;
        background: #f8fafc;
        transition: transform 0.2s ease, background 0.2s ease;
    }

    .dark .table tbody tr:nth-of-type(odd) {
        background: rgba(32, 36, 47, 0.96);
    }

    .table tbody tr:nth-of-type(even) {
        border-radius: 1rem;
        background: #ffffff;
        transition: transform 0.2s ease, background 0.2s ease;
    }

    .dark .table tbody tr:nth-of-type(even) {
        background: rgba(43, 48, 60, 0.96);
    }

    .table tbody tr:hover {
        background: #f1f5f9;
        transform: translateY(-1px);
    }

    .dark .table tbody tr:hover {
        background: rgba(60, 65, 80, 0.98);
    }

    .table th {
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-size: 0.78rem;
    }

    .dark .table th {
        color: rgba(248, 249, 250, 0.84);
    }

    .btn-geek {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.88rem 1.25rem;
        border-radius: 999px;
        background: linear-gradient(135deg, #ffd43b, #f4c029);
        color: #0b0b0d;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        box-shadow: 0 12px 30px rgba(255, 212, 59, 0.18);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-geek:hover {
        transform: translateY(-1px);
        box-shadow: 0 18px 32px rgba(255, 212, 59, 0.24);
    }

    .btn-sm {
        padding: 0.55rem 0.9rem;
        border-radius: 0.95rem;
        font-weight: 600;
        letter-spacing: 0.02em;
        text-transform: none;
    }

    .btn-info,
    .btn-warning,
    .btn-danger {
        border: none;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.18);
        transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-info,
    .btn-warning,
    .btn-danger {
        background: linear-gradient(135deg, #ffd43b, #f4c029);
        color: #0b0b0d;
        border: none;
    }

    .btn-info:hover,
    .btn-warning:hover,
    .btn-danger:hover {
        transform: translateY(-1px);
        filter: brightness(1.05);
    }

    .btn-info:focus,
    .btn-warning:focus,
    .btn-danger:focus {
        box-shadow: 0 0 0 0.35rem rgba(255, 255, 255, 0.12);
    }

    /* Uniform action buttons in tables/lists (slightly more compact) */
    .table .btn,
    .table a.btn,
    .actions .btn {
        min-width: 84px;
        height: 36px;
        padding: 0 0.75rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.02em;
        text-transform: none;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.14);
    }

    .table .btn i,
    .table .btn .fa {
        margin-right: 0.45rem;
        font-size: 0.92em;
    }

    /* Slightly smaller when using btn-sm but keep same visual height ratio */
    .table .btn.btn-sm,
    .actions .btn.btn-sm {
        padding: 0 0.6rem;
        height: 32px;
        min-width: 72px;
    }

    .form-control,
    .form-select,
    textarea.form-control {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        color: #1e293b;
        border-radius: 1rem;
        box-shadow: none;
        transition: border-color 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease;
    }

    .dark .form-control,
    .dark .form-select,
    .dark textarea.form-control {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: #f8f9fa;
    }

    .form-control::placeholder,
    .form-select option {
        color: #94a3b8;
    }

    .dark .form-control::placeholder,
    .dark .form-select option {
        color: rgba(248, 249, 250, 0.64);
    }

    /* Make native select dropdown options readable on dark theme */
    .form-select,
    select.form-select {
        color: #1e293b;
        background-color: #ffffff;
    }

    .dark .form-select,
    .dark select.form-select {
        color: #f8f9fa;
        background: rgba(35, 39, 50, 0.96);
    }

    .form-select option,
    select.form-select option {
        background-color: #ffffff !important;
        color: #1e293b !important;
    }

    .dark .form-select option,
    .dark select.form-select option {
        background-color: rgba(35, 39, 50, 0.96) !important;
        color: #f8f9fa !important;
    }

    /* optgroup labels */
    .form-select optgroup,
    select.form-select optgroup {
        color: #475569 !important;
        background: #ffffff !important;
    }

    .dark .form-select optgroup,
    .dark select.form-select optgroup {
        color: rgba(248, 249, 250, 0.85) !important;
        background: rgba(32, 36, 47, 0.96) !important;
    }

    .form-control:focus,
    .form-select:focus,
    textarea.form-control:focus {
        border-color: #e2b10c;
        background: #ffffff;
        outline: none;
        box-shadow: 0 0 0 0.25rem rgba(255, 212, 59, 0.2);
    }

    .dark .form-control:focus,
    .dark .form-select:focus,
    .dark textarea.form-control:focus {
        border-color: rgba(255, 212, 59, 0.6);
        background: rgba(255, 255, 255, 0.08);
        box-shadow: 0 0 0 0.35rem rgba(255, 212, 59, 0.12);
    }

    .form-label {
        color: #334155;
        font-weight: 600;
        letter-spacing: 0.02em;
    }

    .dark .form-label {
        color: #e6e6e6;
    }

    .btn-outline-secondary {
        color: #475569;
        border-color: #cbd5e1;
        background: transparent;
        border-radius: 999px;
        transition: background 0.2s ease, color 0.2s ease;
    }

    .dark .btn-outline-secondary {
        color: #f8f9fa;
        border-color: rgba(255, 255, 255, 0.18);
    }

    .btn-outline-secondary:hover,
    .btn-outline-secondary:focus {
        color: #0b0b0d;
        background: rgba(255, 212, 59, 0.16);
        border-color: rgba(255, 212, 59, 0.45);
    }

    .alert {
        border-radius: 1.25rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
        background: #f8fafc;
        color: #334155;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
    }

    .dark .alert {
        border: 1px solid rgba(255, 212, 59, 0.16);
        background: rgba(255, 212, 59, 0.08);
        color: #fff;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }

    .dark .table-dark {
        --bs-table-bg: #0b0b0c;
        color: var(--amarelo-geek) !important;
    }

    .dark .table-striped tbody tr {
        background-color: #0b0b0c !important;
    }

    .dark .table-striped tbody tr:nth-of-type(odd) {
        background-color: #0b0b0c !important;
        color: var(--texto-claro);
    }

    .table td,
    .table th {
        border-color: var(--borda-suave);
        vertical-align: middle;
    }

    .alert-info {
        background-color: rgba(255, 212, 59, 0.1);
        border: 1px solid var(--amarelo-geek);
        color: var(--amarelo-geek);
    }

    .dark .bg-dark {
        background-color: #0b0b0c !important;
    }

    .dark .text-white {
        color: #F8F9FA !important;
    }

    .dark .text-white-50 {
        color: rgba(248, 249, 250, 0.5) !important;
    }

    .dark .border-secondary {
        border-color: #2A2A30 !important;
    }

    .card {
        background-color: var(--bg-card);
        border: none;
    }

    footer {
        background-color: var(--bg-card);
        border-top: 1px solid var(--borda-suave);
        color: var(--texto-mutado);
        padding: 1.5rem 0;
        margin-top: 3rem;
    }
</style>
