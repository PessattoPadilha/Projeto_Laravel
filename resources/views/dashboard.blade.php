<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-2 xl:grid-cols-4">
            <a href="{{ route('produtos.index') }}" class="group flex flex-col justify-between rounded-xl border p-5 shadow-sm transition duration-150 hover:opacity-90" style="background-color: var(--bg-card); border-color: var(--borda-suave); border-top: 3px solid var(--amarelo-geek) !important;">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em]" style="color: var(--amarelo-geek);">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold" style="color: var(--texto-claro);">
                        <i class="fa-solid fa-box-open me-2" style="color: var(--amarelo-geek);"></i>Produto
                    </h2>
                    <p class="mt-4 text-sm leading-6" style="color: var(--texto-mutado);">Veja todos os produtos cadastrados e acesse o índice para gerenciar o estoque.</p>
                </div>
                <div class="mt-5">
                    <span class="btn-geek btn-sm">Ver índice</span>
                </div>
            </a>

            <a href="{{ route('marcas.index') }}" class="group flex flex-col justify-between rounded-xl border p-5 shadow-sm transition duration-150 hover:opacity-90" style="background-color: var(--bg-card); border-color: var(--borda-suave); border-top: 3px solid var(--amarelo-geek) !important;">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em]" style="color: var(--amarelo-geek);">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold" style="color: var(--texto-claro);">
                        <i class="fa-solid fa-copyright me-2" style="color: var(--amarelo-geek);"></i>Marca
                    </h2>
                    <p class="mt-4 text-sm leading-6" style="color: var(--texto-mutado);">Veja todas as marcas cadastradas para associar produtos no estoque.</p>
                </div>
                <div class="mt-5">
                    <span class="btn-geek btn-sm">Ver índice</span>
                </div>
            </a>

            <a href="{{ route('fornecedores.index') }}" class="group flex flex-col justify-between rounded-xl border p-5 shadow-sm transition duration-150 hover:opacity-90" style="background-color: var(--bg-card); border-color: var(--borda-suave); border-top: 3px solid var(--amarelo-geek) !important;">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em]" style="color: var(--amarelo-geek);">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold" style="color: var(--texto-claro);">
                        <i class="fa-solid fa-truck me-2" style="color: var(--amarelo-geek);"></i>Fornecedor
                    </h2>
                    <p class="mt-4 text-sm leading-6" style="color: var(--texto-mutado);">Veja todos os fornecedores cadastrados e acesse o índice para gerenciar contatos.</p>
                </div>
                <div class="mt-5">
                    <span class="btn-geek btn-sm">Ver índice</span>
                </div>
            </a>

            <a href="{{ route('categorias.index') }}" class="group flex flex-col justify-between rounded-xl border p-5 shadow-sm transition duration-150 hover:opacity-90" style="background-color: var(--bg-card); border-color: var(--borda-suave); border-top: 3px solid var(--amarelo-geek) !important;">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em]" style="color: var(--amarelo-geek);">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold" style="color: var(--texto-claro);">
                        <i class="fa-solid fa-tags me-2" style="color: var(--amarelo-geek);"></i>Categoria
                    </h2>
                    <p class="mt-4 text-sm leading-6" style="color: var(--texto-mutado);">Veja todas as categorias cadastradas para organizar seus produtos.</p>
                </div>
                <div class="mt-5">
                    <span class="btn-geek btn-sm">Ver índice</span>
                </div>
            </a>
        </div>

        <div class="grid gap-4">
            <div class="rounded-xl border p-6 shadow-sm" style="background-color: var(--surface); border-color: var(--borda-suave); border-top: 3px solid var(--amarelo-geek) !important;">
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl border p-4 text-sm shadow-sm" style="background-color: var(--bg-card); border-color: var(--borda-suave);">
                        <p class="font-semibold" style="color: var(--texto-claro);">Total de produtos</p>
                        <p class="mt-2 text-3xl font-semibold" style="color: var(--amarelo-geek);">{{ $totalProdutos }}</p>
                    </div>
                    <div class="rounded-2xl border p-4 text-sm shadow-sm" style="background-color: var(--bg-card); border-color: var(--borda-suave);">
                        <p class="font-semibold" style="color: var(--texto-claro);">Últimos cadastrados</p>
                        <p class="mt-2 text-sm" style="color: var(--texto-mutado);">Mostrando os produtos mais recentes cadastrados no sistema.</p>
                    </div>
                </div>

                <div class="mt-4 space-y-3">
                    @foreach($destaques as $produto)
                        <div class="rounded-2xl border p-4 text-sm shadow-sm" style="background-color: var(--bg-card); border-color: var(--borda-suave);">
                            <div class="font-semibold" style="color: var(--texto-claro);">{{ $produto->nome }}</div>
                            <div class="mt-1 text-xs uppercase tracking-[0.25em]" style="color: var(--amarelo-geek);">{{ $produto->categoria?->nome ?? 'Categoria não definida' }}</div>
                            <div class="mt-2 text-xs" style="color: var(--texto-mutado);">Criado em: {{ $produto->created_at->timezone(config('app.timezone'))->format('d/m/Y H:i') }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-xl border p-6 shadow-sm" style="background-color: var(--surface); border-color: var(--borda-suave); border-top: 3px solid var(--amarelo-geek) !important;">
                <h3 class="text-lg font-semibold" style="color: var(--texto-claro);">
                    <i class="fa-solid fa-note-sticky me-2" style="color: var(--amarelo-geek);"></i>Notas rápidas
                </h3>

                @if(session('status'))
                    <div class="mt-4 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-800 dark:border-emerald-600 dark:bg-emerald-950 dark:text-emerald-200">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('dashboard.notes') }}" class="mt-4 space-y-4 text-sm">
                    @csrf

                    <div class="rounded-2xl border p-4" style="background-color: var(--bg-card); border-color: var(--borda-suave);">
                        <label class="block text-sm font-medium mb-1" style="color: var(--texto-claro);">Tarefa ou melhoria</label>
                        <textarea name="dashboard_note_task" class="form-control mt-2 w-full resize-none p-3 text-sm shadow-sm focus:outline-none" rows="3" placeholder="Descreva uma ideia, bug ou ajuste que você deseja lembrar...">{{ old('dashboard_note_task', auth()->user()->dashboard_note_task) }}</textarea>
                        @error('dashboard_note_task')
                            <p class="mt-2 text-sm text-rose-600 dark:text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="rounded-2xl border p-4" style="background-color: var(--bg-card); border-color: var(--borda-suave);">
                        <label class="block text-sm font-medium mb-1" style="color: var(--texto-claro);">Notas rápidas</label>
                        <textarea name="dashboard_note_general" class="form-control mt-2 w-full resize-none p-3 text-sm shadow-sm focus:outline-none" rows="3" placeholder="Escreva observações ou ideias que deve lembrar depois...">{{ old('dashboard_note_general', auth()->user()->dashboard_note_general) }}</textarea>
                        @error('dashboard_note_general')
                            <p class="mt-2 text-sm text-rose-600 dark:text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-geek py-2 px-4">
                        <i class="fa-solid fa-floppy-disk me-2"></i>Salvar notas
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
