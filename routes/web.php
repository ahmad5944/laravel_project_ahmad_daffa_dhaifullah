<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Admin
Route::get('/', function () {
	return view('home');
})->name('home');

// Route::get('/dashboard', function () {
// 	return view('dashboard');
// })->middleware(['auth', 'verified', 'admin'])->name('dashboard');

// User
// Route::get('/', function () {
// 	return view('user.home');
// })->name('home');

Route::resource('/products', ProductController::class);

require __DIR__.'/auth.php';
