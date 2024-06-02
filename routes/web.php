<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/express-diagnostics', function () {
    return view('express-diagnostics');
})->name('express-diagnostics');
 
Route::get('/lab-results', function () {
    return view('/client-pages/lab-results');
})->name('lab-results');

Route::get('/ua-results', function () {
    return view('ua-results');
})->name('ua-results');

Route::get('/occult-results', function () {
    return view('occult-results');
})->name('occult-results');

Route::get('/ua-hgb-results', function () {
    return view('ua-hgb-results');
})->name('ua-hgb-results');


//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
