<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', [CalculatorController::class, 'form']);
Route::post('/calculate', [CalculatorController::class, 'calculate'])->name('calculate');
