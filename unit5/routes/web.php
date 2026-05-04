<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationEIController;

Route::get('/', function () {
    return view('myEIfrom');
});

Route::post('/submit', [ValidationEIController::class, 'submit']);

