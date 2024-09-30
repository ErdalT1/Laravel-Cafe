<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cafe', function () {
    return view('intro');
});

Route::get('/', [MenuItemController::class, 'index']);

Route::post('/save-order', [OrderController::class, 'store'])->name('save-order');

Route::get('/adminpanel', [OrderController::class, 'adminPanel'])->name('adminpanel');

Route::get('/intro', [MenuItemController::class, 'index'])->name('intro');

Route::get('/menu', [MenuItemController::class, 'menu'])->name('menu');

// Route::get('/', [HomeController::class, 'index'])->name('home');
