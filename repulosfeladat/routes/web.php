<?php

use App\Http\Controllers\AirlinesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/airlines', [AirlinesController::class, 'index'])->name('airlines.index');
Route::get('/airlines/create', [AirlinesController::class, 'create'])->name('airlines.create');
Route::post('/airlines', [AirlinesController::class, 'store'])->name('airlines.store');
Route::get('/airlines/{airline}/edit', [AirlinesController::class, 'edit'])->name('airlines.edit');
Route::put('/airlines/{airline}', [AirlinesController::class, 'update'])->name('airlines.update');
Route::delete('/airlines/{airline}', [AirlinesController::class, 'destroy'])->name('airlines.destroy');

