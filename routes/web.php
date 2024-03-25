<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DateController,TimezoneController,BookController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/date',DateController::class)->middleware('auth');
Route::get('/timezone',[TimezoneController::class,'get_timezone'])->middleware('auth');
Route::get('/books',[BookController::class,'index'])->name('books.index')->middleware('auth');
Route::get('/books/create',[BookController::class,'create'])->name('books.create')->middleware('auth');
Route::post('/books',[BookController::class,'store'])->name('books.store')->middleware('auth');
Route::get('/books/{book}',[BookController::class,'show'])->name('books.show')->middleware('auth');
Route::get('/books/{book}/edit',[BookController::class,'edit'])->name('books.edit')->middleware('auth');
Route::patch('/books/{book}',[BookController::class,'update'])->name('books.update')->middleware('auth');
Route::delete('/books',[BookController::class,'delete'])->name('books.destroy')->middleware('auth');
