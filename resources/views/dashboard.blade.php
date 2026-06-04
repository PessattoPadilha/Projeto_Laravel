<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-2 xl:grid-cols-4">
            <a href="{{ route('produtos.index') }}" class="group flex flex-col justify-between rounded-xl border border-neutral-200 bg-white p-5 shadow-sm transition duration-150 hover:border-slate-300 hover:bg-slate-50 dark:border-neutral-700 dark:bg-slate-950 dark:hover:border-slate-600 dark:hover:bg-slate-900">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold text-slate-900 dark:text-slate-100">Produto</h2>
                    <p class="mt-4 text-sm leading-6 text-slate-600 dark:text-slate-300">Veja todos os produtos cadastrados e acesse o índice para gerenciar o estoque.</p>
                </div>
                <span class="mt-5 inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 transition group-hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-200 dark:group-hover:bg-slate-700">Ver índice</span>
            </a>

            <a href="{{ route('marcas.index') }}" class="group flex flex-col justify-between rounded-xl border border-neutral-200 bg-white p-5 shadow-sm transition duration-150 hover:border-slate-300 hover:bg-slate-50 dark:border-neutral-700 dark:bg-slate-950 dark:hover:border-slate-600 dark:hover:bg-slate-900">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold text-slate-900 dark:text-slate-100">Marca</h2>
                    <p class="mt-4 text-sm leading-6 text-slate-600 dark:text-slate-300">Veja todas as marcas cadastradas para associar produtos no estoque.</p>
                </div>
                <span class="mt-5 inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 transition group-hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-200 dark:group-hover:bg-slate-700">Ver índice</span>
            </a>

            <a href="{{ route('fornecedores.index') }}" class="group flex flex-col justify-between rounded-xl border border-neutral-200 bg-white p-5 shadow-sm transition duration-150 hover:border-slate-300 hover:bg-slate-50 dark:border-neutral-700 dark:bg-slate-950 dark:hover:border-slate-600 dark:hover:bg-slate-900">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold text-slate-900 dark:text-slate-100">Fornecedor</h2>
                    <p class="mt-4 text-sm leading-6 text-slate-600 dark:text-slate-300">Veja todos os fornecedores cadastrados e acesse o índice para gerenciar contatos.</p>
                </div>
                <span class="mt-5 inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 transition group-hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-200 dark:group-hover:bg-slate-700">Ver índice</span>
            </a>

            <a href="{{ route('categorias.index') }}" class="group flex flex-col justify-between rounded-xl border border-neutral-200 bg-white p-5 shadow-sm transition duration-150 hover:border-slate-300 hover:bg-slate-50 dark:border-neutral-700 dark:bg-slate-950 dark:hover:border-slate-600 dark:hover:bg-slate-900">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Ver lista</p>
                    <h2 class="mt-3 text-xl font-semibold text-slate-900 dark:text-slate-100">Categoria</h2>
                    <p class="mt-4 text-sm leading-6 text-slate-600 dark:text-slate-300">Veja todas as categorias cadastradas para organizar seus produtos.</p>
                </div>
                <span class="mt-5 inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 transition group-hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-200 dark:group-hover:bg-slate-700">Ver índice</span>
            </a>
        </div>

        <div class="grid gap-4">
            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-slate-950">
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 text-sm text-slate-700 dark:border-slate-800 dark:bg-slate-900 dark:text-slate-300">
                        <p class="font-semibold text-slate-900 dark:text-slate-100">Total de produtos</p>
                        <p class="mt-2 text-3xl font-semibold text-slate-900 dark:text-slate-100">{{ $totalProdutos }}</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 text-sm text-slate-700 dark:border-slate-800 dark:bg-slate-900 dark:text-slate-300">
                        <p class="font-semibold text-slate-900 dark:text-slate-100">Últimos cadastrados</p>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">Mostrando os produtos mais recentes cadastrados no sistema.</p>
                    </div>
                </div>

                <div class="mt-4 space-y-3">
                    @foreach($destaques as $produto)
                        <div class="rounded-2xl border border-slate-200 bg-white p-4 text-sm text-slate-700 shadow-sm dark:border-slate-800 dark:bg-slate-900 dark:text-slate-300">
                            <div class="font-semibold text-slate-900 dark:text-slate-100">{{ $produto->nome }}</div>
                            <div class="mt-1 text-xs uppercase tracking-[0.25em] text-slate-500 dark:text-slate-400">{{ $produto->categoria?->nome ?? 'Categoria não definida' }}</div>
                            <div class="mt-2 text-xs text-slate-500 dark:text-slate-400">Criado em: {{ $produto->created_at->timezone(config('app.timezone'))->format('d/m/Y H:i') }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-slate-950">
                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Notas rápidas</h3>

                @if(session('status'))
                    <div class="mt-4 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-800 dark:border-emerald-700 dark:bg-emerald-950 dark:text-emerald-200">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('dashboard.notes') }}" class="mt-4 space-y-4 text-sm text-slate-600 dark:text-slate-300">
                    @csrf

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-900">
                        <label class="block text-sm font-medium text-slate-900 dark:text-slate-100">Tarefa ou melhoria</label>
                        <textarea name="dashboard_note_task" class="mt-2 w-full resize-none rounded-2xl border border-slate-200 bg-white p-3 text-sm text-slate-700 shadow-sm focus:border-slate-400 focus:outline-none dark:border-slate-800 dark:bg-slate-950 dark:text-slate-100" rows="3" placeholder="Descreva uma ideia, bug ou ajuste que você deseja lembrar...">{{ old('dashboard_note_task', auth()->user()->dashboard_note_task) }}</textarea>
                        @error('dashboard_note_task')
                            <p class="mt-2 text-sm text-rose-600 dark:text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-900">
                        <label class="block text-sm font-medium text-slate-900 dark:text-slate-100">Notas rápidas</label>
                        <textarea name="dashboard_note_general" class="mt-2 w-full resize-none rounded-2xl border border-slate-200 bg-white p-3 text-sm text-slate-700 shadow-sm focus:border-slate-400 focus:outline-none dark:border-slate-800 dark:bg-slate-950 dark:text-slate-100" rows="3" placeholder="Escreva observações ou ideias que deve lembrar depois...">{{ old('dashboard_note_general', auth()->user()->dashboard_note_general) }}</textarea>
                        @error('dashboard_note_general')
                            <p class="mt-2 text-sm text-rose-600 dark:text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-800 dark:bg-slate-100 dark:text-slate-950 dark:hover:bg-slate-200">
                        Salvar notas
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
