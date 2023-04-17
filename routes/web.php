<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AuthOnly;
use App\Http\Middleware\GuestOnly;

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





Route::middleware(AuthOnly::class)->group(function () {
    Route::get('/', [InventoryController::class, 'index'])->name('index');

    Route::post('/create', [InventoryController::class, 'store'])->name('products.create');

    Route::delete('/product/{id}', [InventoryController::class, 'delete'])->name('products.delete');

    Route::get('/edit/{id}', [InventoryController::class, 'updateView'])->name('products.edit.view');

    Route::put('/update{id}', [InventoryController::class, 'update'])->name('products.update');

    Route::post('/logout', [LogoutController::class, 'logout']);
});

Route::middleware(GuestOnly::class)->group(function () {

    Route::view('/login', 'login')->name('loginpage');

    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');


    Route::view('/register', 'register');

    Route::post('/register', [UserController::class, 'register']);
});
