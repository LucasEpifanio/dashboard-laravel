<?php

use App\Http\Controllers\Analises;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Configuracao;
use App\Http\Controllers\Documentossub1;
use App\Http\Controllers\Documentossub2;
use App\Http\Controllers\Help;
use App\Http\Controllers\paginainicial;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

// routes/web.php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */



Route::get('/change-language/{locale}', [LanguageController::class, 'changeLanguage'])
    ->name('change.language');

Route::get('/', [Paginainicial::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/logout', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('clientes', [Clientes::class, 'index'])
        ->name('Clientes');

    Route::get('documentos-sub-1', [Documentossub1::class, 'index'])
        ->name('Documentossub1');

    Route::get('documentos-sub-2', [Documentossub2::class, 'index'])
        ->name('Documentossub2');

    Route::get('analises', [Analises::class, 'index'])
        ->name('Analises');

    Route::get('configuracao', [Configuracao::class, 'index'])
        ->name('Configuracao');

    Route::get('help', [Help::class, 'index'])
        ->name('Help');
});

require __DIR__ . '/auth.php';

Route::fallback(function () {
    return view('errors.404');
})->name('404');