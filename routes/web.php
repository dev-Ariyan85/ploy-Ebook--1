<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BookController;



Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.submit');


// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
 


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('books', BookController::class);
});



