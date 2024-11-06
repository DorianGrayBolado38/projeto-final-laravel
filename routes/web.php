<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagensController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('adm.gerenciamento');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [PersonagensController::class, "MostrarHome"])->name('home');
Route::get('/cadastro-personagem', [PersonagensController::class, "MostrarCadastroPersonagem"])->name('cadastro-personagem');
Route::post('/cadastrar-personagem', [PersonagensController::class, 'CadastroPersonagem'])->name('cadastrar-personagem');
Route::get('/lista-personagem', [PersonagensController::class, "MostrarPersonagemNome"])->name('lista-personagem');
Route::get('/altera-personagem/{id}', [PersonagensController::class, "MostrarPersonagemCodigo"])->name('altera-personagem');
Route::delete('/apagar-personagem/{id}', [PersonagensController::class, 'Destroy'])->name('apagar-personagem');
Route::put('/altera-personagem/{id}', [PersonagensController::class, 'Update'])->name('altera-personagem');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});



require __DIR__.'/auth.php';
