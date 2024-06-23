<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/express-diagnostics', function () {
    return view('express-diagnostics');
})->name('express-diagnostics');

Route::post('/express-diagnostics', function () {
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

Route::get('/cholinesterase-results', function () {
    return view('cholinesterase-results');
})->name('cholinesterase-results');

Route::get('/hgb-results', function () {
    return view('hgb-results');
})->name('hgb-results');

Route::get('/cbc-results', function () {
    return view('cbc-results');
})->name('cbc-results');

Route::get('/hepaA-results', function () {
    return view('hepaA-results');
})->name('hepaA-results');

Route::get('/hepaB-Quantitative-results', function () {
    return view('hepaB-Quantitative-results');
})->name('hepaB-Quantitative-results');

Route::get('/hepaB-Qualitative-results', function () {
    return view('hepaB-Qualitative-results');
})->name('hepaB-Qualitative-results');

Route::get('/pt-serum-results', function () {
    return view('pt-serum-results');
})->name('pt-serum-results');

Route::get('/pt-urine-results', function () {
    return view('pt-urine-results');
})->name('pt-urine-results');

Route::get('/syphilis-results', function () {
    return view('syphilis-results');
})->name('syphilis-results');

Route::get('/raptest-results', function () {
    return view('raptest-results');
})->name('raptest-results');

Route::get('/hiv-results', function () {
    return view('hiv-results');
})->name('hiv-results');

Route::get('/bloodtype-results', function () {
    return view('bloodtype-results');
})->name('bloodtype-results');

Route::get('/thyroid-results', function () {
    return view('thyroid-results');
})->name('thyroid-results');



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
