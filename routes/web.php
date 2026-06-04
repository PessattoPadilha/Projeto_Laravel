<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Livewire\Volt\Volt;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\MarcasController;
use App\Models\Produtos;



Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('dashboard', function () {
    $destaques = Produtos::orderByDesc('created_at')->take(4)->get();
    $totalProdutos = Produtos::count();
    return view('dashboard', compact('destaques', 'totalProdutos'));
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::post('dashboard/notes', function (Request $request) {
    $request->validate([
        'dashboard_note_task' => 'nullable|string|max:2000',
        'dashboard_note_general' => 'nullable|string|max:2000',
    ]);

    $request->user()->update($request->only(['dashboard_note_task', 'dashboard_note_general']));

    return back()->with('status', 'Notas salvas com sucesso.');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard.notes');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');


    Route::resource('fornecedores', FornecedoresController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('marcas', MarcasController::class);
    Route::resource('produtos', ProdutosController::class);
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
