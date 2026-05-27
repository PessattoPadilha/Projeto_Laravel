<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;



Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');


    Route::resource('fornecedores', FornecedoresController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('marcas', MarcaController::class);
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
