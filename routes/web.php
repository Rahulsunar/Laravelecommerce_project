<?php

use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;

// Home route
Route::get('/', [HomeController::class, 'home']);

// Backend routes
Route::prefix('backend')->name('backend.')->group(function () {
    // Category Controller
    Route::delete('/category/force_delete/{id}', [CategoryController::class, 'forceRemove'])->name('category.force_delete');
    Route::get('/category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
    Route::get('/category/trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::resource('category', CategoryController::class);

    // Products Controller
    Route::get('/products/trash', [ProductsController::class, 'trash'])->name('products.trash');
    Route::resource('products', ProductsController::class);
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Additional auth routes
require __DIR__.'/auth.php';

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index']);
    Route::get('view_category', [AdminController::class, 'view_category']);
    Route::post('add_category', [AdminController::class, 'add_category']);
});
