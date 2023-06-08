<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    Route::prefix('categories')->group(function () {

        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::patch('{category}/update', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('{category}/delete', [CategoryController::class, 'destroy'])->name('admin.categories.delete');

    });

    Route::prefix('brands')->group(function () {

        Route::get('/', [BrandController::class, 'index'])->name('admin.brands.index');
        Route::get('create', [BrandController::class, 'create'])->name('admin.brands.create');
        Route::post('store', [BrandController::class, 'store'])->name('admin.brands.store');
        Route::get('{brand}/edit', [BrandController::class, 'edit'])->name('admin.brands.edit');
        Route::patch('{brand}/update', [BrandController::class, 'update'])->name('admin.brands.update');
        Route::delete('{brand}/delete', [BrandController::class, 'destroy'])->name('admin.brands.delete');

    });

    Route::prefix('products')->group(function () {

        Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('store', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('{product:slug}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::patch('{product}/update', [ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('{product}/delete', [ProductController::class, 'destroy'])->name('admin.products.delete');

    });
});

