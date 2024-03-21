<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;
use App\Http\Controllers\TimezoneController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/date',DateController::class);
route::get('/timezone',[TimezoneController::class,'get_timezone']);