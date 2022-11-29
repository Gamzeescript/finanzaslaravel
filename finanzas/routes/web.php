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

Route::get('/entradas/{$id}', [EntradasController::class, 'show'])->name('entradas-edit');

Route::patch('/entradas/{$id}', [EntradasController::class, 'update'])->name('entradas-update');

Route::delete('/entradas/{$id}', [EntradasController::class, 'destroy'])->name('entradas-destroy');



