<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\HomeController;
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
});
