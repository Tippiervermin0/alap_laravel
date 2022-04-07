<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TevekenysegController;
use App\Http\Controllers\BejegyzesController;

Route::get('/bejegyzesek', [BejegyzesController::class, 'index']);
Route::get('/bejegyzesek/{osztaly_id}', [BejegyzesController::class, 'osztaly']);

Route::post('/bejegyzes', [BejegyzesekController::class, 'store']);

Route::get('/tevekenysegek', [TevekenysegController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
