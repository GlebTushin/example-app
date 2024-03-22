<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DateController,TimezoneController,BookController};


Route::get('/', function () {
    return view('welcome');
});

Route::get('/date',DateController::class);
Route::get('/timezone',[TimezoneController::class,'get_timezone']);
Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/create',[BookController::class,'create'])->name('books.create');
Route::post('/books',[BookController::class,'store'])->name('books.store');
Route::get('/books/{book}',[BookController::class,'show'])->name('books.show');
Route::get('/books/{book}/edit',[BookController::class,'edit'])->name('books.edit');
Route::patch('/books/{book}',[BookController::class,'update'])->name('books.update');
Route::delete('/books',[BookController::class,'delete'])->name('books.destroy');