<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/niños', [NinoController::class, 'index'])->name('ninos.index');
Route::get('/niños/create', [NinoController::class, 'create'])->name('ninos.create');
Route::post('/niños', [NinoController::class, 'store'])->name('ninos.store');
Route::get('/niños/edit/{nino}', [NinoController::class, 'edit'])->name('ninos.edit');
Route::put('/niños/{nino}', [NinoController::class, 'update'])->name('ninos.update');
Route::delete('/niños/{nino}', [NinoController::class, 'destroy'])->name('ninos.destroy');
