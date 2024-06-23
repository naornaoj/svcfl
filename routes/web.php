<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/users', function () {
    return view('/admin-pages/users');
})->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('users', UserController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth','verified']);

Route::get('/users/{user}', function (User $user) {
    //$user = DB::select('select * from users where id = ?', $id);
    return $user;
})->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
