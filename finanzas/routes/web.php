<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entradas', [EntradasController::class, 'index'])->name('entradas');

Route::post('/entradas', [EntradasController::class, 'store'])->name('entradas');

Route::get('/entradas/{$id}', [EntradasController::class, 'show'])->name('entradas-show');

Route::patch('/entradas/{$id}', [EntradasController::class, 'update'])->name('entradas-update');

Route::delete('/entradas/{$id}', [EntradasController::class, 'destroy'])->name('entradas-destroy');

Route::get('/salidas', [SalidasController::class, 'index'])->name('salidas');

Route::post('/salidas', [SalidasController::class, 'store'])->name('salidas');

Route::get('/salidas/{$id}', [SalidasController::class, 'show'])->name('salidas-show');

Route::patch('/salidas/{$id}', [SalidasController::class, 'update'])->name('salidas-update');

Route::delete('/salidas/{$id}', [SalidasController::class, 'destroy'])->name('salidas-destroy');

Route::get('/entradas-detalle', [EntradasDetallesController::class, 'index'])->name('entradasdetalle');

Route::get('/entradas-detalle/{$id}', [EntradasDetallesController::class, 'show'])->name('entradasdetalle-show');

Route::get('/salidas-detalle', [SalidasDetallesController::class, 'index'])->name('salidas');

Route::get('/salidas-detalle/{$id}', [SalidasDetallesController::class, 'show'])->name('salidasdetalle-show');






