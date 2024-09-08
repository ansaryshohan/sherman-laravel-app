<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master.pages.homePage.master');
});
Route::get('/all-clients', [ClientController::class,"show"]);
Route::get('/add-client', [ClientController::class,"create"]);
Route::post('/client', [ClientController::class,"store"]);
Route::get('/client/update/{id}', [ClientController::class,"edit"]);
Route::patch('/client/update/{id}', [ClientController::class,"update"]);
Route::delete('/client/{id}', [ClientController::class,"destroy"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
