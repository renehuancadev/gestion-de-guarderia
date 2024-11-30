<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinoController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\TipoActividadController;
use App\Http\Controllers\TutorController;

Route::get('/', function () {
    return to_route('ninos.index');
});

Route::get('/niños', [NinoController::class, 'index'])->name('ninos.index');
Route::get('/niños/create', [NinoController::class, 'create'])->name('ninos.create');
Route::post('/niños', [NinoController::class, 'store'])->name('ninos.store');
Route::get('/niños/edit/{nino}', [NinoController::class, 'edit'])->name('ninos.edit');
Route::put('/niños/{nino}', [NinoController::class, 'update'])->name('ninos.update');
Route::delete('/niños/{nino}', [NinoController::class, 'destroy'])->name('ninos.destroy');

Route::get('/actividades', [ActividadController::class, 'index'])->name('actividades.index');
Route::get('/actividades/create', [ActividadController::class, 'create'])->name('actividades.create');
Route::post('/actividades', [ActividadController::class, 'store'])->name('actividades.store');
Route::get('/actividades/edit/{actividad}', [ActividadController::class, 'edit'])->name('actividades.edit');
Route::put('/actividades/{actividad}', [ActividadController::class, 'update'])->name('actividades.update');
Route::delete('/actividades/{actividad}', [ActividadController::class, 'destroy'])->name('actividades.destroy');

Route::get('/tutores', [TutorController::class, 'index'])->name('tutores.index');
Route::get('/tipos-actividad', [TipoActividadController::class, 'index'])->name('tiposactividad.index');
