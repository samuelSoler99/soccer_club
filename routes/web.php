<?php

use Illuminate\Support\Facades\Route;

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

Route::get('clubs', [\App\Http\Controllers\ClubController::class, 'index'])->name('club.index');
Route::get('clubs/create', [\App\Http\Controllers\ClubController::class, 'create'])->name('club.create');
Route::post('clubs', [\App\Http\Controllers\ClubController::class, 'store'])->name('club.store');
Route::get('clubs/{id}', [\App\Http\Controllers\ClubController::class, 'show'])->name('club.show');
Route::get('clubs/{id}/edit', [\App\Http\Controllers\ClubController::class, 'edit'])->name('club.edit');
Route::put('clubs/{id}', [\App\Http\Controllers\ClubController::class, 'store'])->name('club.update');
Route::post('clubs/{club}', [\App\Http\Controllers\ClubController::class, 'destroy'])->name('club.destroy');
