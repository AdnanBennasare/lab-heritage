<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personne\PersonneController;


Route::prefix('stagiaire')->group(function () {
    Route::get('/', [PersonneController::class, 'index'])->name('stagiaire.index');
    Route::get('/form-ajouter', [PersonneController::class, 'create'])->name('stagiaire.create');
    Route::post('/ajouter', [PersonneController::class, 'store'])->name('stagiaire.store');
    Route::get('/{id}', [PersonneController::class, 'show'])->name('stagiaire.show');
    Route::get('/{id}/edit', [PersonneController::class, 'edit'])->name('stagiaire.edit');
    Route::post('/{id}/update', [PersonneController::class, 'update'])->name('stagiaire.update');
    Route::delete('/{id}/delete', [PersonneController::class, 'delete'])->name('stagiaire.delete');
});
