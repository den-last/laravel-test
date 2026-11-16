<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewNoteController;

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/', [MainController::class, 'index'])->name('notes.index');
Route::get('/note/{id}', [MainController::class, 'show'])->name('note.show');
Route::get('/add-new', [NewNoteController::class, 'index'])->name('notes.create');
Route::post('/note-send', [NewNoteController::class, 'store'])->name('notes.store');
