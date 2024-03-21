<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/date',[DateController::class,'__invoke']);